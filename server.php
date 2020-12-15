<?php 
	session_start();

	// variable declaration
	$name = "";
	$username = "";
	$address = "";
	$number ="";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// REGISTER USER
	if (isset($_POST['register'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$number = mysqli_real_escape_string($db, $_POST['number']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "*Full Name   is required"); }
		if (empty($username)) { array_push($errors, "*Username  is required"); }
		if (empty($address)) { array_push($errors, "*Address  is required"); }
		if (empty($number)) { array_push($errors, "*Phone Number is required"); }
		//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors['email'] = "Email  is  invalid"; //valid email
		if (empty($email)) { array_push($errors, "*Email  is required"); }
		if (empty($password_1)) { array_push($errors, "*Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		
		//if email repeated
		/*$emailquery = "SELECT * FROM users WHERE email=? LIMIT 1";
		$stmt = $db->prepare($emailquery);
		$stmt->bind_param('s',$email);
		$stmt->execute();
		$result = $stmt->get_result();
		$usercount = $result->num_rows;*/

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name, username, address, number, email, password) 
					  VALUES( '$name','$username', '$address', '$number' , '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You're now Logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "*Username is required");
		}
		if (empty($password)) {
			array_push($errors, "*Password  is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You're now Logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong Username/Password ");
			}
		}
	}
	// FORGOT PASSWORD USER
	if (isset($_POST['get_new_password'])) {
		$email = $_POST['email'];
	
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = "Email address is invalid ";
		}
		
		if (empty($email)) {
			$errors['email'] = "Email required";
		}
		

		/*if (count($errors) == 0) {
			
			$query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
			$result = mysqli_query($db, $query);
			$user = mysqli_fetch_assoc($result);
			$token = $user['token'];
			sendPasswordResetLink($email,$token);
			header('location: password_massage.php');
			exit(0);*/

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "Link will sent tho ur email";
				//header('location: index.php');
			}else {
				array_push($errors, "-invalid email ");
			}
		}
	//}

	
?>