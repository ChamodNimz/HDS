<?php require_once('dbConnection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Guest Book</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  	<script>
              new WOW().init();
    </script>
	 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- session -->
	<?php
session_start();
 if(isset($_SESSION['commentedOrNot']))
 {
 	if($_SESSION['commentedOrNot']==1)
 	{
 		include('commentedMessage.php');
 		session_destroy();
 	}
 	else
 	{

 	}
 }
 ?><!-- end of session part -->
	<!-- navigation -->
	<nav class="navbar  navbar-dark bg-dark">
		<ul class="nav">
			<div class="navbar-brand">
				<img src="../images/brand/guestbook.png" width="50px" height="50px">
				<h2 class="text-warning">Guest Book</h2>
			</div>
			<li class="nav-item"><a href="index.php" class="nav-link text-light lead">Home</a></li>
			<li class="nav-item"><a href="view.php" class="nav-link text-light lead">View</a></li>
			<li class="nav-item"><a href="registeredComments.php" class="nav-link text-light lead">Register</a></li>
			<li class="nav-item"><a href="#" class="nav-link text-light lead bold">Event</a></li>
		</ul>
	</nav>
	<!-- welcome section-->
		<div class="row">
			<div class="col-md-12">
				<div class=" jumbotron-fluid shadow-lg">
					<div class="row ">
						<div class="col-md-12">
						<img src="../images/events/Star-Wars-skyscraper-future-city_1920x1080.jpg" class="main-image shadow-lg">
						<div class="text text-light">
							<h1 class="text-style text-center wow fadeInDown display-3">Feel the future today!</h1>
						</div>
						<div class="text-secondary text-center pt-3 wow fadeIn">
							<h3 class="lead font-italic text-light ">Join as a member..! Register NOW!</h3>
						</div>
						<div class="btn-register text-center wow fadeInUp">
							<a href="registeredComments.php" class="btn btn-dark btn-lg btn-outline-light">Register</a>
						</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- cards-->
		<div class="row m-5">
			<div class=" col-md-4">
					<div class="  ml-5 shadow-lg rounded mb-3 card wow fadeInLeft" data-wow-delay="1.2s" style="width: 18rem;">
						<img src="../images/cards/444425.jpg" alt="Card image cap" style="height:180px">
						<div class="card-body">
							<p class="font-italic">
							We most welcome you all. Grab everything you can. Work with the brilliant minds. sharpen your skills.
							</p>
						</div>
					</div>
			</div>
			<div class="col-md-4">
					<div class=" ml-5 shadow-lg rounded mb-3 card wow fadeInLeft" data-wow-delay="0.8s" style="width: 18rem;">
						<img src="../images/cards/6536df75bc3c58212c106b971173b9b0.jpg" alt="Card image cap" style="height: 180px">
						<div class="card-body">
							<p class="font-italic">
							Think different..Gain knowledge..Work with us.. Open your path to a great carrier today</p> 
						</div>
					</div>
			</div>
			<div class=" col-md-4">
					<div class="  ml-5 shadow-lg rounded mb-3 card wow fadeInLeft" data-wow-delay="0.4s" style="width: 18rem;">
						<img src="../images/cards/70d6b3aaf2857dce05601505b8ca7db0.jpg" alt="Card image cap" style="height: 180px">
						<div class="card-body">
							<p class="font-italic">
							Coders get ready Of course there is a competiton for you people. let's see who gets the job done right?
							</p>
						</div>
					</div>
			</div>
		</div>
	<!-- comment section -->
	<!-- pure comment section -->
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron shadow ">
				<h1 class=" display-4 text-info">Leave your comments..</h1>
				<hr class="my-5">
				<h3 class="lead text-dark mb-3 pb-3">Most recent comments</h3>
				<!--starting the comment section this is dynamically created accordingly -->
				<?php 
					$count=0;//to count the comments
					$query= "select * from comments order by id desc limit 10";
					$dataSet=mysqli_query($connection,$query);
					$time=1.0;
					while($row=mysqli_fetch_assoc($dataSet)):
						$time=$time+0.8;
						$count=$count+1;
				 ?>
				<div class="border border-dark card shadow round wow <?php if($count==1){echo'bounceIn';} else {} ?>" data-wow-delay=" <?php echo'$time'.'s'?>">
					<div class="card-header p-1" ><span>#</span><!-- the main title of the comment -->	
					<small><b><?php echo"".$row['title'].""; ?></b></small></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-1">
							<?php if('male'==$row['type']): ?>
								<img src="../images/avatar/men.png" width="60px" height="60px">
							<?php elseif('female'==$row['type']): ?>
								<img src="../images/avatar/women.png" width="60px" height="60px">
							<?php else: ?>
								<img src="../images/avatar/anonymouse.png" width="60px" height="60px">
							<?php endif; ?>		
							</div>
							<div class="col-md-11">
								<blockquote class="blockquote mb-0">
									<p><small><?php echo"".$row['comment'].""; ?></small></p>
									<footer class="blockquote-footer"><span><small><b><?php echo"".$row['name'].""; ?></b></small></span><cite title="Source Title">@ future of CS 101</cite></footer>
								</blockquote>
							</div>
						</div>	
					</div>
				</div>
				<br>
			<?php endwhile; ?>

	<div class=" shadow  p-5">
		<form method="post" action="controller.php">
			<div class="form-group">
				<h2 class="display-4 text-info"> Add a comment</h2>
				<hr class="my-3 bg-dark">
				<label for="txt-comment-header" class="text-dark lead"  > Comment Title <span class="text-danger">*</span></label>
				<input type="text" name="txtCommentHeader" id="txt-comment-header" class="form-control form-control-sm wow fadeInUp" required><br>
				<label for="txt-comment" class="display-5 text-dark lead">Comment<span class="text-danger">*</span></label>
				<textarea class="form-control shadow-sm wow fadeInUp"  name="txt-comment" rows="4" id="txt-comment" required></textarea>
				<button class="btn btn-outline-dark btn-large mt-3 float-right wow fadeInUp" data-wow-delay="0.8s" type="submit">Comment</button>
			</div>
		</form>
	</div>
			<!--end of a single comment-->
			</div>
		</div>
	</div>
	<!--end of comment section-->
	<!-- comment creating section (form actually), this is static this does not change-->
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>