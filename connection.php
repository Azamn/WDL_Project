<?php 

	
	$host = "localhost";
	$user = "admin";
	$password = "admin";
	$dbname = "greeting";


	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn){
		die($conn);
	}else

	/*echo "connection established Succesfully";*/


 ?>