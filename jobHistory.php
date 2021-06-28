<?php
	include "connection.php";  
	
	$picPath; 
	
	if(isset($_GET["jobId"]) && is_numeric($_GET["jobId"])){
		$jobId = $_GET["jobId"]; 
		$job = connection::getJob($jobId); 
		$jobTitle = $job["title"];
		$jobDescription = $job["description"];
		$picPath = $job["picture"];
		$picPath = $picPath == "sitePictures/poker.jpg" ? "sitePictures/backgammon.jpg" : $picPath; 
	}else{
		header("location:index.php"); 
	}
	
			
	$allPictures = connection::getAllPictures(); 
	if(!in_array($picPath, $allPictures)){
		header("location:index.php");
	}
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Job History</title>
	
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Akronim&family=Comfortaa:wght@300&family=Mr+Dafoe&family=Quicksand:wght@300&family=Satisfy&family=Special+Elite&display=swap" rel="stylesheet"> 
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet"> 
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">
		
	<style type="text/css">
		body{
			width: 100vw;
			overflow-x: hidden; 
			margin: 0; 
		}
		header{ 
			display: flex;
			justify-content: center; 
			width: 100%; 
			height: 10%;
			top: 0;
			left: 0;
			transition: all 1s ease; 
		}
		header h1{
			font-family: 'Mr Dafoe', cursive;  
			color: #f1f1f1; 
		}
		a{
			text-decoration: none; 
		}
		h1{
			font-family: 'Akronim', cursive;
			color: #000000;
			text-align: center;
		}
		p{
			font-family: 'Akronim', cursive; 
			margin: 100px 100px;
			font-size: 180%; 
			color: #000000; 
			font-weight: bolder; 
		}
		#background{
			position: fixed;
			top: 0; 
			left: 0; 
			z-index: -1; 
			width: 100vw;
			height: 100%; 
			background-image: url(<?= $picPath ?>); 
			background-repeat: no-repeat;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center; 
		}
		#main{
			width: 70vw;
			height: 100%; 
			margin: 150px auto;
			padding-top: 100px;
			padding-bottom: 100px; 
			background-color: #f1f1f1; 
			opacity: 0.8; 
		}
		@media only screen and (max-width: 800px){
			p{
				font-family: 'Akronim', cursive; 
				margin: 10px 10px;
				font-size: 100%; 
				font-weight: bolder; 
				color: #000;
			}
			h1{
				font-size: 150%; 
				color: #000; 
			}
			background{
				position: fixed;
				top: 0; 
				left: 0; 
				z-index: -1; 
				width: 100vw;
				height: 100%; 
				background-image: url(<?= $picPath ?>); 
				background-repeat: no-repeat;
				background-size: cover;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: space-around; 
			}
			#main{
				width: 95%; 
				padding-top: 5px;
				margin-top: 100px; 
				background-color: #f1f1f1; 
				opacity: 0.7; 
			}
		}
	</style>
</head>
<body>
	<header>	
		<h1>DBranković</h1>
	</header>
	<div id="background"></div>
	<div id="main">
		<h1><?= $jobTitle ?></h1>
		<p><?= $jobDescription ?> </p>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>