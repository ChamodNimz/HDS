<?php include_once('dbConnection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>View all comments</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>
<body>
<?php include('navigation.php'); ?>
<?php
//delete a comment code 
if(isset($_GET['delete']))
{
	$commentId=$_GET['delete'];
	$query="delete from  comments where id=$commentId";
	$result=mysqli_query($connection,$query);
	if($result==1)
	{
		echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>Successfully deleted the comment!
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    			<span aria-hidden='true'>&times;</span>
 		 		</button>
			</div>";

	}
	else
	{
		echo"<div class='alert alert-danger' role='alert'>Sorry something went wrong please try again!Couldn't delete comment!</div>";
	}
}
?>
	<div class="container-fluid text-center"><br>
		<h1 class="display-3 text-info">View All Comments</h1><br>
		<hr class="my-3" style="background-color: grey;width: 1250px">
		<div class="contianer p-3 m-5">
			<?php $query="select * from comments"; 
				 //dbConnection->query($query);
				 $dataSet=mysqli_query($connection,$query);		
			?>
		<table class="table table-hover table-striped text-dark shadow table-bordered">
			<thead class="thead-dark">
				<tr>
					<th class="lead">Edit</th>
					<th class="lead">Name</th>
					<th class="lead">Title</th>
					<th class="lead">Comment</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row=mysqli_fetch_array($dataSet)): ?>
				<tr>
					<td class="lead"><a class="btn btn-dark fas fa-trash-alt text-light"
					 href="view.php?delete=<?=$row['id'];?>"></a></td>
					<td class="lead"><?php echo"".$row['name'].""?></td>
					<td class="lead"><?php echo"".$row['title'].""?></td>
					<td class="lead"><?php echo"".$row['comment'].""?></td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>			
		</div>
	</div>	
	<?php include('footer.php'); ?>
	<script type="text/javascript">
		$('alert').alert()
	</script>
</body>
</html>
