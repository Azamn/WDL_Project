<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

	<section class="login-block">
    <div class="container">
	   <div class="row">
		  <div class="col-md-4 login-sec">
	     <h2 class="text-center">Registration Here</h2>
  <form class="login-form" action="registrationProcess.php" method="post">
      <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username" required="required">
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" required="required">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
    </div>
  
  
    <div class="form-check">
    	<button type="submit" value="submit" name="submit" class="btn btn-login float-right">Register</button>
  </div>
   <div class="para-left">
        All Ready Account! <a href="login.php">Login Here</a>
    </div>
  
</form>
<div class="copy-text">Created <i></i> By <a href="#">Azamali Shaikh</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
    <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/01.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Greeting Card Maker</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/03.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Greeting Card Maker</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
     <div class="carousel-item">
      <img class="d-block img-fluid" src="img/02.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Greeting Card Maker</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
</div>	   
	
<script>
  
  $(document).ready(function(){
    $('.form-group input').val('');
  })

</script>


	<script src="js/bootstrapp.min.css"></script>		  
	<script src="js/bootstrapp.min.js"></script>

</body>
</html>