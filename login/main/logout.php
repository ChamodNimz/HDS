<?php 
	session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password']))
{

	session_unset();
	session_destroy();
	echo"asdsd";
	header('Location:index.php');
}
else
{
	echo"unset session";
}

?>