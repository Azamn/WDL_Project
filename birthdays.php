<!DOCTYPE html>
<html>
<head>
	<title>Online Greetings Cards</title>
	<style>
		.cards-main{
			margin-top: 50px;
			padding: 10px;
			padding-left: 30px;
		}
	</style>

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
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--NavBar Closed -->

<!--Cards -->
<div class="cards-main">
<div class="cards">
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a1.jpg">
	</div>
	<input type = "hidden" name = "image" value = "1">
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
	<form name="preview-form" action="example.php" method="post">
	<div class="image">
		<img src="img/a2.jpg">
	</div>
	<input type = "hidden" name = "image" value = "2">
	<div class="title">
		<h1>Happy birthhday.</h1>
		<input type = "hidden" name = "head" value = "Happy Birthday">	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>May God bless you.  </p>
		<input type = "hidden" name = "footer" value = "May God bless you.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary" onclick="submitForm()">
	</div>
	</form>	
</div>

<!-- cards 2 ends-->
<div class="cards">
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a3.jpg">
	</div>
	<input type = "hidden" name = "image" value = "3">
	<div class="title">
		<h1>I am Sorry</h1>	
		<input type = "hidden" name = "head" value = "I am Sorry">
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>I am really sorry. </p>
		<input type = "hidden" name = "footer" value = "I am really sorry.">
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>

<div class="cards">
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a1.jpg">
	</div>
	<div class="title">
		<h1>Happy birthhday.</h1>	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>May God bless you.  </p>
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>
<!-- 1 Cards Ends -->

<div class="cards">
	<form action="example.php" method="post">
	<div class="image">
		<img src="img/a2.jpg" >
	</div>
	<div class="title">
		<h1>Thank you..!</h1>	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!"></textarea>
		<p>Thank You</p>
	<input type="submit" name="Preview" value="Preview" class="btn btn-primary">
	</div>
	</form>	
</div>


<!-- cards 2 ends-->
<div class="cards">
	<form  action="example.php" method="post">
	<div class="image">
		<img src="img/a3.jpg">
	</div>
	<input type = "hidden" name = "image" value = "3">
	<div class="title">
		<h1>Happy Aniversary..!</h1>	
	</div>
	<div class="description">
		<textarea class="form-control col-xs-12" name="message" placeholder="Enter Your message..!" ></textarea>
		<p>May God bless you.  </p>
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