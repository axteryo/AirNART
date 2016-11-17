

<?php

    session_start();
    if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
    {
      echo "In order to reaccess this page, you must login!";
      header("Location:index.php");
    }

    include("connection.php");
    if(isset($_GET['r_id']))
	{
		$req_id = $_GET['r_id'];
		$req_query = mysqli_query($dbc,"SELECT * 
									FROM  flight
									JOIN housing 
									WHERE flight.request_id = '$req_id' 
									AND housing.request_id = '$req_id'
									#JOIN student 
									#WHERE student.id = housing.student_id 
									#AND student.id = flight.student_id 
									");
    }

  
    $numrows = mysqli_num_rows($req_query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/sort.js"></script>
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

					<li class = "active navli col-md-3 col-sm-3 col-xs-12"> <a href = "adminHome.php" class="navlink">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<body>
<main>
	<div class="container bgshadow">
 		<div class="row">
    		<section class="col-sm-12">
      			<div class="h1-title">
				<h1>Manage Requests</h1>
				</div>    
    		</section>
 		</div>



		<div class=" col-lg-3 col-md-4 col-sm-3 col-xs-12">
		<h3>Sorting Criteria</h3>
			<form action="" method="POST" name="sortForm" id="sortForm">

				<label>Start Date</label><br><input type="date" name="startDate" id="startDate"><br>
				<label>End Date</label><br><input type="date" name="endDate"><br>
				<label>Time Period</label><br><select name="timePeriod">
					<option value="Morning">Morning(7am - 12pm)</option>
					<option value="Afternoon">Afternoon(12pm - 5pm)</option>
					<option value="Evening">Evening(5pm - 10pm)</option>
					<option value="" selected>none</option>
				</select><br>
				<label>Gender</label><br><select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="" selected>none</option>
				</select><br>
				<label>Gender Preference</label><br><select name="genderPreference">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="" selected>none</option>
				</select>
				<br><br>
				<button type="submit" name="sortButton" id = "sortButton" value="sort"> sort </button>
			</form>
			<hr>
		</div>
		<div class=" fluid-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<span>

			<?php
				if(isset($_POST['sortButton']))
				{
					$startDate = $_POST['startDate'];
					$endDate = $_POST['endDate'];
					$timePeriod = $_POST['timePeriod'];
					$gender = $_POST['gender'];
					$genderPreference = $_POST['genderPreference'];

					echo "string";

				}


			?>
		</span>


		
		
		</div>


	</div>
</main>


	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/sort_set.js"></script>
	
</body>

<footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>

</html>