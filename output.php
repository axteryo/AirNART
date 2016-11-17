<!-- This page for displaying The lists -->


<?php

    session_start();
    if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
    {
      echo "In order to reaccess this page, you must login!";
      header("Location:index.php");
    }

    include("connection.php");
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>Bootstrap Test</title>
</head>


		
<header>
	<section class="fluid-container">
		<div class="row pageheading">
			<h1 class="col-xs-9 col-sm-10 col-md-10 h1-head">AIR-NART</h1>
			
		</div>
	</section>
</header>

<div class="fluid-container">
	<nav class="navbar-custom">
		<div class="container">
			<div class="row">
				<ul class ="nav-custom">

					<li class = "active navli col-md-3 col-sm-3 col-xs-12"> <a href = "nothing" class="navlink">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>


<main>
	<div class="container bgshadow">
 		<div class="row">
    		<section class="col-sm-12">
      			<div class="h1-title">
				<h1>Manage Volunteers</h1>
				</div>    
    		</section>
 		</div>
 	

		
	
	
			<div class=" col-lg-3 col-md-4 col-sm-3 col-xs-12">
				<h3>Hello User1</h3>
				<ul>
				<li>Status: Admin</li>
				<li>New Messages:(0)</li>
				<li><a href="logout.php">Log Out</a></li>
				</ul>
				<hr>
			</div>
		
			
			<div class=" fluid-container col-lg-9 col-md-8 col-sm-9 col-xs-12">
				
				<span>
				
				<button class="btn btn-lg btn btn-warning"><a href="" class="btn-a">Manage Requests</a></button>
				<button class="btn btn-lg btn btn-warning"><a href="" class="btn-a">Manage Volunteers</a></button>
					
				</span>
			</div>
	</div>

			
	
			
		</main>
		
  
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>

		
	</body>

<footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>

</html>