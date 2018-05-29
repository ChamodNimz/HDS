<?php 
	$connection=mysqli_connect("localhost","demon","chamod123");
	$dataBase=mysqli_select_db($connection,"session_Management");
	 if(!$connection)
 	{
	 die('Connection Failed'.mysql_error());
 	}
	//configuring the data base

?>