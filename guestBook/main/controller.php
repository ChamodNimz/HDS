<?php
include_once('dbConnection.php');
$name=$_POST['txtName'];
function sanitize($dirtyString){
		return htmlentities($dirtyString,ENT_QUOTES,"UTF-8");
	}
if(null==$_POST['txtName'])
{
	$comment = $_POST['txt-comment'];
	$commentTitle=$_POST['txtCommentHeader'];
	$comment=sanitize($comment);
	$commentTitle=sanitize($commentTitle);
	//configuring the data base
	//$username="chamod";
	//$host="localhost";
	//$password="chamod123";
	//$connection=mysqli_connect($host,$username,$password);
	//$dataBase=mysqli_select_db($connection,"guest_Book");
	

	if(!mysqli_connect_errno())
	{
		//get date-time first
		date_default_timezone_set('Asia/Calcutta');
		$dateTime=date("Y-m-d G:i:s");
		$query="insert into comments (dateTime,name,comment,title,type) values ('$dateTime','Anonymous','$comment','$commentTitle','anonymous')";
		$result=mysqli_query($connection,$query);
		if($result==1)
		{
			
		}
		else
		{
			echo"something went wrong";
		}
	}
	else
	{
		echo"failed to connect with database with error code: ".mysqli_connect_errno();
		die();
	}
}
else if(isset($name))
{
	$comment = $_POST['txt-comment'];
	$gender=$_POST['rbnGender'];
	$commentTitle=$_POST['txtCommentHeader'];
	$comment=sanitize($comment);
	$commentTitle=sanitize($commentTitle);
	$name=sanitize($name);
	date_default_timezone_set('Asia/Calcutta');
	$dateTime=date("Y-m-d G:i:s");
	$query="insert into comments (dateTime,name,comment,title,type) values ('$dateTime','$name','$comment','$commentTitle','$gender')";
	$result=mysqli_query($connection,$query);
	if($result==1)
	{
		echo"success";
	}
	else
	{
		echo"failed ";
	}
}
?> 
<?php if(isset($result)): ?>
<?php if($result==1): ?>
<?php session_start();
	$_SESSION['commentedOrNot']=1;;
 ?>
<?php header('Location:index.php'); ?>
<?php endif; ?>
<?php endif; ?>
