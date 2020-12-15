<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php include('header.php') ?>
</head>
<body>
</br>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	 echo $_SESSION['success']; 
          	 unset($_SESSION['success']); 
          ?> 
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	</br><p>WELCOME, <strong><i><?php echo $_SESSION['username']; ?></strong></i></p>
    	<p><a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
    <?php endif ?>
</div>

<br><br>
<div class="slideshow-container">

    <div class="mySlides fade">

        <img src="5.jpg." style="width:100%; ">

    </div>

    <div class="mySlides fade">

        <img src="2.jpg" style="width:100%; ">

    </div>

    <div class="mySlides fade">

        <img src="6.jpg" style="width:100%; ">

    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

<br><br>
<figure class="text-center">
    <blockquote class="blockquote">
        <p> Food Brings People together on many different levels. Its nourishment of the soul and body; Its truly love</p>
    </blockquote><br>
    <figcaption class="blockquote-footer">
         <cite title="Source Title"> - Giada De Laurentiis</cite>
    </figcaption>
</figure>

<?php include('footer.php'); ?>
</body>
</html>