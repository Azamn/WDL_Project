<?php 
	session_start();
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	
		if(!empty($_SESSION)){
			//echo "welcome ".$_SESSION['username'];
			//die();
		}
 	?>
<!DOCTYPE html>
<html>
<head>

	<title>Online Greetings Cards</title>
	<style>
		.cards-main{
			padding: 10px;
			padding-left: 25px;
		}
	</style>

	
<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container-fluid">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Greetings Island</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Category <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="birthdays.php">Birthdays</a></li>
                <li><a href="weddings.php">Weddings</a></li>
                <li><a href="thanks.php">Thanksgiving</a></li>
                <li><a href="sorry.php">Sorry</a></li>
                <li><a href="indepen.php">Independence</a></li>
            	</ul>
            </li>
      </ul>

      <?php
      	    if(!empty($_SESSION)){
      	    	echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">'.$_SESSION['username'].'</a></li>
      </ul>';
      	    	echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>';
		}
		else
		{
			echo '<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>';
		}
      ?>
      
    </div>
  </div>
</nav>
<!--NavBar Closed -->

<!--Slider  -->
<!-- <div class="container"> -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/2.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h3>Card Maker</h3>
          <p>We Provide Best Greetings Crads.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/1.jpeg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Card Maker</h3>
          <p>You can Print or send as eCard for free!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/3.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>Card Maker</h3>
          <p>We love to help you.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- </div> -->
<!--Slider Closed -->

<!--Cards -->

<div class="cards-main">
<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="birthdays.php">Birthdays</a>
	</div>
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a2.jpg">
	</div>
	<input type = "hidden" name = "image" value = "2">
	<div class="title">
		<h1>Happy Birthday.</h1>
		<input type = "hidden" name = "head" value = "Happy Birthday">	
	</div>
		<div class="description">
          	<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>May God bless you.  </p>
		<input type = "hidden" name = "footer" value = "May God bless you.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</form>
	</div>	
</div>
<!-- 1 Cards Ends -->
<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="aniversary.php">Aniversaries</a>
	</div>
	<form name="preview-form" action="example.php" method="post">
	<div class="image">
		<img src="img/a1.jpg">
	</div>
	<input type = "hidden" name = "image" value = "1">
	<div class="title">
		<h1>Happy Aniversary.</h1>
		<input type = "hidden" name = "head" value = "Happy Aniversary">	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>Wishing you lots of such aniversaries coming forth.</p>
		<input type = "hidden" name = "footer" value = "Wishing you lots of such aniversaries coming forth.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary" onclick="submitForm()">
	</div>
	</form>	
</div>

<!-- cards 2 ends-->
<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="weddings.php">Weddings</a>
	</div>
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a3.jpg">
	</div>
	<input type = "hidden" name = "image" value = "3">
	<div class="title">
		<h1>Happy Wedding</h1>	
		<input type = "hidden" name = "head" value = "Happy Wedding">
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>My God bless this wonderful wedding a astonishing bonding.</p>
		<input type = "hidden" name = "footer" value = "My God bless this wonderful wedding a astonishing bonding.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>

<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="thanks.php">Thanksgiving</a>
	</div>
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a8.jpg">
	</div>
	<input type = "hidden" name = "image" value = "8">
	<div class="title">
		<h1>Thank You</h1>	
		<input type = "hidden" name = "head" value = "Thank You">
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>Thanks again</p>
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>
<!-- 1 Cards Ends -->

<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="sorry.php">Sorry</a>
	</div>
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a5.jpg" >
	</div>
	<input type = "hidden" name = "image" value = "5">
	<div class="title">
		<h1>I am Sooo Sorrrryyy</h1>
		<input type = "hidden" name = "head" value = "I am Sooo Sorrryyy">
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>Please forgive me.</p>
		<input type = "hidden" name = "footer" value = "Please forgive me.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>


<!-- cards 2 ends-->
<div class="cards">
	<div class="buttons d-flex justify-content-center align-items-center">
		<a href="indepen.php">Independence</a>
	</div>
	<form  action="example.php" method="post">
	<div class="image">
		<img src="img/a6.jpg">
	</div>
	<input type = "hidden" name = "image" value = "6">
	<div class="title">
		<h1>Happy Independence Day</h1>
		<input type = "hidden" name = "head" value = "Happy Independence Day">	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!" ></textarea>
		<p>Jai Hind</p>
		<input type = "hidden" name = "footer" value = "Jai Hind.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>	
</div>
</form>
</div>

<!-- cards closed -->
<!-- footer -->
<footer>
		<div>
			&copy;2018 All rights reserved - Azamali Shaikh
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

<script>
			$(document).ready(function(){
				$('.description textarea').val('');
			})	
      
</script>

</body>
</html>