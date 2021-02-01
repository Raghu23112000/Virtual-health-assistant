<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Virtual Health Assistant</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
	<div class="container-fluid">
		<div id="slider">
			<div id="headerSlider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#headerSlider" data-slide-to="0" class="active"></li>
				<li data-target="#headerSlider" data-slide-to="1"></li>
				<li data-target="#headerSlider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="banner11.jpg" class="d-block img-fluid">
					<div class="carousel-caption">
						<h5> DOCTOR APPOINMENT SYSTEM </h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="banner22.jpg" class="d-block img-fluid" >
					<div class="carousel-caption">
						<h5> DOCTOR APPOINMENT SYSTEM </h5>
					</div>
				</div>
				<div class="carousel-item">
					<img src="banner33.jpg" class="d-block img-fluid" >
					<div class="carousel-caption">
						<h5> DOCTOR APPOINMENT SYSTEM </h5>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:doctorlogin.php");
		}



	 ?>


<div class="container-fluid">

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav" style="padding: 0px; margin-left:-15px;margin-right:-15px;">
		<nav class="menu">
			<ul>
       <li><a href="myDetails.php">Profile</a></li>
				<li><a href="myAppoinment.php">My Appoinments</a></li>
				<li style="float:right;"><a href="logout.php" >Logout</a></li>
			</ul>
		</nav>
	</div>
