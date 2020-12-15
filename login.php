
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <?php include('header.php') ?>


</head>
<body>

<main>
    <br>
    <figure class="text-center" >
        <blockquote class="blockquote">
            <p >  Food is not rational. Food is culture, habit, craving and identity.</p>
        </blockquote><br>
        <figcaption class="blockquote-footer">
            <cite title="Source Title"> - Jonathan Safran Foer</cite>
        </figcaption>
    </figure>

<!--header-->
  <div class="title">
  	<h2>LOGIN</h2>
  </div>
	 
  <form method="post" action="login.php">
  
	<!--display error-->
  	<?php include('errors.php'); ?>
	
	<!--username-->
  	<div class="input">
  		<label>Username</label>
  		<input type="text" name="username" ><!--placeholder="Enter Username"-->
  	</div>
	
	<!--password-->
  	<div class="input">
  		<label>Password</label>
  		<input type="password" name="password" id="password"><!--placeholder="Enter Password"--> 
		
		<!--eye for password-->
		<span>
        <i class="fa fa-eye" id="eye" onclick="toggle()">
        </i>
		</span>
		
		
		<!-- hide/show password javasrcipt-->
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
	
	<!--login submit button-->
  	<div class="input">
  		<button type="submit" class="button1" name="login_user">Login</button>
  	</div>
	
	<!--link to register page-->
  	<p class="link" style="text-align:left;">
  		Not a member yet? <a href="register.php" >Sign up</a>
		
		<!--link to forgot password page-->
		<span style="float:right;">
		 <a href="forgotpassword.php" >Forgotten Password?</a>
		</span>
  	</p>
  </form>

</main>
<?php include('footer.php'); ?>

</body>
</html>