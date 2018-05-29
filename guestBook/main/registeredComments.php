<!DOCTYPE html>
<html>
<head>
	<title>Register and Comment</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
	<script type="text/javascript" src="../js/wow.min.js"></script>
  	<script>
              new WOW().init();
    </script>
</head>
<body class="back-color">
	<?php include('navigation.php');?>
	<div class="container-fluid 	">
		<div class="container shadow-lg bg-light p-5 pt-5 mt-5 rounded text-dark overflow">
			<form action="controller.php" method="post">
						<h1 class="display-3 text-info">Register and comment...</h1><br><br>
				<div class="form-group">
					<label for="txt-name " class="lead wow fadeInUp">Your name <span class="text-danger wow fadeInUp">*</span></label>
					<input type="text" name="txtName" class="form-control shadow-lg wow fadeInUp" required><br>
					<label for="txt-comment-header" class="text-dark lead wow fadeInUp"  > Comment Title <span class="text-danger">*</span></label>
					<input type="text" name="txtCommentHeader" id="txt-comment-header" class="form-control form-control-lg shadow-lg wow fadeInUp" required><br>
					<label for="rbn-gender" class="lead wow fadeInUp">I am..<span class="text-danger wow fadeInUp">*</span></label><br>
					<div class="form-check form-check-inline wow fadeInUp">
						<input type="radio" name="rbnGender" class="form-check-input shadow" id="rbn-male" value="male"><label class="form-check-label " for="rbn-male">Male</label>
					</div>
					<div class="form-check form-check-inline wow fadeInUp">
						<input type="radio" name="rbnGender" class="form-check-input shadow" id="rbn-female" value="female"><label class="form-check-label " for="rbn-female"  >Female</label>
					</div><br><br>
					<label for="txt-comment" class="display-5 text-dark lead wow fadeInUp">Comment<span class="text-danger">*</span></label>
					<textarea class="form-control shadow-lg wow fadeInUp"  name="txt-comment" rows="7" id="txt-comment" required></textarea>
					<button class="btn btn-outline-dark btn-large mt-3 float-right shadow wow fadeInUp" data-wow-delay="0.8s" type="submit">Comment</button>
				</div>
			</form>
		</div><br><br>
	</div>
	<?php include('footer.php'); ?>

</body>
</html>