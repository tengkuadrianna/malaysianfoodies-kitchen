
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet"  type="text/css"  href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <?php include('header.php') ?>
</head>

<body>

<main>
<br>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>  Food is symbolic of love when words are inadequate </p>
        </blockquote><br>
        <figcaption class="blockquote-footer">
            <cite title="Source Title"> - Alan D Wolfelt</cite>
        </figcaption>
    </figure>

<!--header-->
<div class="title">
	<h2>REGISTER</h2>
</div>

<form method="post" action="register.php">
	
	<!--display error-->
	<?php include('errors.php'); ?>

	<!--name-->
	<div class="input">
		<label>Full Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	
	<!--username-->
	<div class="input">
		<label>Username</label>
		<input type="text"  name="username" value="<?php echo $username; ?>">
	</div>
	
	<!--address-->
	<div class="input">
		<label>Address</label>
		<input type="text"  name="address"  value="<?php echo $address; ?>">
	</div>
	
	<!--phone number-->
	<div class="input">
		<label>Phone Number</label>
		<input type="tel"  name="number" value="<?php echo $number; ?>" pattern="[0-9]{9,10,11}">
	</div>
	
	<!--email-->
	<div class="input">
		<label>Email</label>
		<input type="email"  name="email" value="<?php echo $email; ?>" >
	</div>
	
	<!--password-->
	<div class="input">
		<label>Password</label>
		<input type="password" name="password1" id="password">
		<span>
        <i class="fa fa-eye" id="eye" onclick="toggle()">
        </i>
		</span>
		
		<!--hide/show password-->
		 <script>
		 var state= false;
		function toggle(){
		if(state){
		document.getElementById("password").setAttribute("type","password");
		document.getElementById("eye").style.color='#7a797e';
		state = false;
		}
		else{
		document.getElementById("password").setAttribute("type","text");
		document.getElementById("eye").style.color='#5887ef';
		state = true;
		}
		}
		 </script>
	</div>
	
	<!--confirm password-->
	<div class="input">
		<label>Confirm Password</label>
		<input type="password"  name="confirm_password" id="password">
		<span>
        <i class="fa fa-eye" id="eye" onclick="toggle()">
        </i>
		</span>
	</div>	
	
	<!--register submit button-->
	<div class="input">
		<button type="submit" name="register" class="button1">Register</button>
	</div>
	

	<!--link to login page-->
	<p class="link">
		Already a member? <a href="login.php">Sign in</a>
	</p>
		
	</form>



</main>
<?php include('footer.php'); ?>
</body>
</html>