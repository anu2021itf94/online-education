<?php

	//defining host
	$host = "localhost";
	//definig username
	$username = "root";
	$password = "";
	//defining database
	$database = "online_edu";

	$conn = mysqli_connect($host,$username,$password,$database);

	if(!$conn){
		die("Database connection failed " . mysqli_error($conn));
	}
	else{
		echo "Database connetion success !!";
	}
?>