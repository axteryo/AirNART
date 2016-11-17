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

				<p>Here is a list of Volunteers currently Signed up and available for pickup and transportation, as well as temporary housing. You can click on the <strong>ID</strong> of the volunteer to view their profile or edit their information.</p>

				
					<span>
						<h3><strong> Volunteer Pickup Availability</strong></h3>
						<?php
							$record = mysqli_query($dbc,"SELECT volunteer_id, Name, Email, Phone, pickup_date, availability_period, pickup_availability.id AS p_id FROM volunteer RIGHT JOIN pickup_availability ON(volunteer.id = pickup_availability.volunteer_id) ORDER BY pickup_date; ");

							$numrows = mysqli_num_rows($record);

							if($numrows !=0)
							{
								echo"<table class = 'table'>
									<tr>
										<th>Volunteer ID </th>
										<th>Name </th>
										<th>Email </th>
										<th>Phone </th>
										<th>Availability Date</th>
										<th>Availability Period</th>
										<th>Availability ID </th>
									</tr>";

								while($row = mysqli_fetch_array($record))
								{
									echo "<tr>";
									echo 	"<td>".$row['volunteer_id']."</td>";
									echo 	"<td>".$row['Name']."</td>";
									echo 	"<td>".$row['Email']."</td>";
									echo 	"<td>".$row['Phone']."</td>";
									echo 	"<td>".$row['pickup_date']."</td>";
									echo 	"<td>".$row['availability_period']."</td>";
									echo 	"<td>".$row['p_id']."</td>";
									echo "</tr>";
								}
								echo "</table>";
							}

						?>
					</span>
					
					<span>
						<h3><strong> Volunteer Housing Availability</strong></h3>
						<?php
							$record2 = mysqli_query($dbc,"SELECT volunteer_id, Name, Email, Phone, DATE_FORMAT(start_date,'%W %D %M %Y') AS start, DATE_FORMAT(end_date,'%W %D %M %Y') AS ending, housing_availability.id AS h_id FROM volunteer RIGHT JOIN housing_availability ON(housing_availability.volunteer_id = volunteer.id) ORDER BY start_date;");
							$numrows = mysqli_num_rows($record2);

							if($numrows !=0)
							{
								echo"<table class = 'table'>
									<tr>
										<th>Volunteer ID </th>
										<th>Name </th>
										<th>Email </th>
										<th>Phone </th>
										<th>Housing Period Start Date</th>
										<th>Housing Period End Date</th>
										<th>Availability ID </th>
									</tr>";


								while($row = mysqli_fetch_array($record2))
								{
									echo "<tr>";
									echo 	"<td>".$row['volunteer_id']."</td>";
									echo 	"<td>".$row['Name']."</td>";
									echo 	"<td>".$row['Email']."</td>";
									echo 	"<td>".$row['Phone']."</td>";
									echo 	"<td>".$row['start']."</td>";
									echo 	"<td>".$row['ending']."</td>";
									echo 	"<td>".$row['h_id']."</td>";
									echo "</tr>";
								}
								echo "</table>";
							}

						?>
					</span>

				</span>

				<span>
					
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