<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/clock.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
</head>
<body>
	<?php include('navigation.php'); ?>
	<!-- navigation finish-->
	<?php
 	if(isset($_SESSION['username']) && isset($_SESSION['password']))
 	{
 		if(isset($_COOKIE['userExpiration']))
 		{

 		}
 		else
 		{
 			session_unset();
 			session_destroy();
 			header('Location:index.php');
 		}
 	}
 	else
 	{
 		header('Location:index.php');
 	}
?>
	<!--contents -->
		<img src="../images/background/computer-with-man.jpeg" style="width: 100%;height:auto; background-position: fixed;
			background-repeat: no-repeat;">
		<div id="clock">
    		<p class="date">{{ date }}</p>
    		<p class="time">{{ time }}</p>
		</div>
	<!--end of content-->
	<script type="text/javascript">
		var clock = new Vue({
    el: '#clock',
    data: {
        time: '',
        date: ''
    }
});

var week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
var timerID = setInterval(updateTime, 1000);
updateTime();
function updateTime() {
    var cd = new Date();
    clock.time = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
    clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
};

function zeroPadding(num, digit) {
    var zero = '';
    for(var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
}
	</script>
</body>
</html>