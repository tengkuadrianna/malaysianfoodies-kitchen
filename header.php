<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
  <!--load  <meta name="viewport" content="width=devive-width, initial-sc">-->
    <link rel="stylesheet" type="text/css" href="style2.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<header>
<!--logo-->
<div class="top-container">
    <p> <img src="1.2.23.png" alt="Logo" width="250" height="100"> </p>
</div>
</header>

<!--header-->
<div class="headerr" id="myHeader">
    <!--HOME LINK-->
    <a href="index.php"  >HOME</a>
    <!--RECIPES LINK-->
    <div class="dropdown" style="float:left;">
        <button class="dropbtn">RECIPES
            <i class="fa fa-caret-down"></i>
        </button>
        <!--RECIPES DROP DOWN LINK-->
        <div class="dropdown-content" style="left:0;" >
            <a href="#">ALL RECIPES</a>
            <a href="#">MALAYSIAN</a>
            <a href="#">THAI</a>
            <a href="#">WESTERN</a>
            <a href="#">CHICKEN</a>
            <a href="#">DESSERT</a>
            <a href="#">NOODLES</a>
        </div>
    </div>
    <!--RESTAURANT LINK-->
    <a href="#" >RESTAURANT</a>
    <a href="#" >QUIZ</a>
    <a href="#" >KITCHEN TIPS</a>
    <a href="#"  >SHOP</a>
    <a href="#" >PODCAST</a>
    <a href="register.php"  >SIGN UP </a>
    <a class="none">|</a>
    <a href="login.php"  >LOG IN</a>

    <div class="search-container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <a style="float:right; " class="fa fa-shopping-cart" href="cart.html"></a>

</div>







<!-- javescript for header-->
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>

</body>
</html>