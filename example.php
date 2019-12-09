

<!DOCTYPE html>
<html>
<head>

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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
	body{
		background-color: #a3b2cc;
	}
	.final{
		margin-bottom: 100px;	
	}
	.button{
	display: flex;
	align-items: center;
	justify-content: center;
	}
	footer{
		margin-top: 100px;
	}
	.alert{
	margin-bottom:20px;

	}

</style>
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
       <!--  <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Service</a></li> -->
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

      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div> -->
</nav>

<div class="final">
<div class="Cards-main d-flex justify-content-center align-items-center" id="card">
<div class="Cards" id="greeting">
	<!-- <form action="#" method="POST"> -->
	<div class="image">
		<img src="img/a<?php echo $_POST['image']; ?>.jpg">
	</div>
	<div class="title">
		<h1> <?php echo $_POST['head']; ?>
		<!-- Thank you..! --></h1>	
	</div>
	<div class="description">
		<?php echo $_POST['message'] ?>
		<h3><?php echo $_POST['footer']?><!-- Thank you..! --></h3>
	</div>
</div>
</div>
<?php 

	if(!empty($_SESSION)){
		echo '<div class="button d-flex justify-content-center align-items-center">
	<a class="btn btn-primary" href="javascript:pdfToHTML()">Save As PDF</a>
</div>';
	}else{
		echo '<div class="alert alert-danger">
                  <strong>Please Login First For Download.</strong>
                </div>';
              }

 ?>
<!-- <div class="button d-flex justify-content-center align-items-center">
	<a class="btn btn-primary" href="javascript:pdfToHTML()">Save As PDF</a>
</div> -->
</div>
	<!-- </form> -->

<footer>
		<div>
			&copy;2018 All rights reserved - Azamali Shaikh
		</div>
</footer>


<script src="js1/jspdf.js"></script>
<script src="js1/jquery-2.1.3.js"></script>
<script src="js1/pdfFromHTML.js"></script>

<script src="js/jquery.js"></script>
<script src="js/html2canvas.min.js"></script>
<script src="js/canvas2image.js"></script>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

</body>
</html>
