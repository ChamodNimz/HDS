<?php
//configuring the data base
	$username="chamod";
	$host="localhost";
	$password="chamod123";
	$connection=mysqli_connect($host,$username,$password);
	$dataBase=mysqli_select_db($connection,"guest_Book");
?> 