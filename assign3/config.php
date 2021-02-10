<?php
	$hostname = "localhost"; 
	$username = "root";
	$password = ""; 
	$databasename = "web";

	$conn = mysqli_connect($hostname , $username , $password , $databasename); 

	if(!$conn){
		echo "Connection Aborted...." + mysqli_connect_error(); 
	}
?>