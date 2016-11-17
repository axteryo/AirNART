

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
		$req_query = mysqli_query($dbc,"SELECT * FROM request WHERE id = '$req_id'");

    }

    $h_date = '';
    $p_date = '';
    $req_row = [];
    $housing_request =[];
    $pickup_request = [];
  
  
    $numrows1 = mysqli_num_rows($req_query);
    if($numrows1!=0)
    {
    	$req_row = mysqli_fetch_array($req_query);
    	$housing_request = $req_row['housing_request'];
    	$pickup_request = $req_row['pickup_request'];
    	if($housing_request == 'Yes' && $pickup_request == 'Yes')
    	{
    		$req_query = mysqli_query($dbc,"SELECT *
									FROM  flight
									JOIN housing
									ON flight.request_id = '$req_id' 
									AND housing.request_id = '$req_id'
									JOIN student 
									ON student.id = housing.student_id 
									AND student.id = flight.student_id 
									");
    		$req_row = mysqli_fetch_array($req_query);
    		$h_date = $req_row['time_period'];
    		$p_date = $req_row['arrival_date'];
    	}
    	else if($housing_request == 'Yes' && $pickup_request == 'No')
    	{
    		$req_query = mysqli_query($dbc,"SELECT *
									FROM housing
									JOIN student 
									ON housing.request_id = '$req_id'
							
									and student.id = housing.student_id 
									# student.id = flight.student_id 
									");
    		$req_row = mysqli_fetch_array($req_query);
    		$h_date = $req_row['time_period'];
    	}
    	else if($housing_request == 'No' && $pickup_request == 'Yes')
    	{
    		$req_query = mysqli_query($dbc,"SELECT *
									FROM  flight
									JOIN student 
									ON flight.request_id = '$req_id' 
									
									#WHERE student.id = housing.student_id 
									and student.id = flight.student_id 
									");

    		$req_row = mysqli_fetch_array($req_query);
    		$p_date = $req_row['arrival_date'];
    		//$h_date = $req_row['time_period'];
    	}
    	else{
    		echo "Please select a request to assign";
    	}
    	
    	



    }


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
				<h1>Assign Requests</h1>
				</div>    
    		</section>
 		</div>

<!--

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
		</div>-->
		<div class=" fluid-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<span>

			<?php
					echo "<form class = 'bgshadow '>";
					echo "	<label> Student Name</label>";
					echo "	<label> Gender</label>";
					echo "	<label>Number Of Bags </label>";
					if($pickup_request == 'Yes')
					{
						echo "<h3>Pickup Needed</h3>";
						echo "<label>Date of Arrival</label>";
						echo "<label>Arrival Time</label>";
						echo "<label>Arrival Airline</label>";
						echo "<label></label>";
						echo "<label></label>";
						
					}
					
					if($housing_request == 'Yes')
					{
						echo "<h3>Housing Needed</h3>";
						echo "<label>Date of desired Housing</label>";
						echo "<label>Length of housing</label>";
						echo "<label>Next Destination</label>";
						echo "<label>Comments on Housing</label>";

					}
					echo " </form>";

			
				/*if(isset($_POST['sortButton']))
				{
					$startDate = $_POST['startDate'];
					$endDate = $_POST['endDate'];
					$timePeriod = $_POST['timePeriod'];
					$gender = $_POST['gender'];
					$genderPreference = $_POST['genderPreference'];

					//if(!empty() && !empty())
					

				}*/
				//echo $h_date;
				if($housing_request == 'Yes')
				{
					echo "<h2>Available Housing</h2>";
					$h_query = mysqli_query($dbc,"SELECT volunteer_id, Name, Gender, address, DATE_FORMAT(start_date,'%W %D %M %Y') 
												  AS s_date, DATE_FORMAT(end_date,'%W %D %M %Y')	
												  AS e_date, gender_preference, housing_availability.id 
												  AS ha_id, student_count 
												  FROM housing_availability
												  JOIN volunteer
												  ON volunteer.id = housing_availability.volunteer_id
												  AND'$h_date' 
												  BETWEEN housing_availability.start_date 
												  AND housing_availability.end_date 
											  ");


					$numrows = mysqli_num_rows($h_query);

					if ($numrows!=0) 
					{
						
						echo "<form>";
						echo "<table class = 'table'>
							<thead class = 'thead-inverse'>
								<tr>
									<th>Volunteer Id</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Gender Preference</th>
									<th>Amount of students able to host</th>
									<th>Housing Availability Id</th>
									<th> Assign housing </th>
								</tr>
							</thead>
							";
						while ($row =mysqli_fetch_array($h_query))
						{
							echo "<tr>";
							echo "	<td>".$row['volunteer_id'] ."</td>";
							echo "	<td>".$row['Name'] ."</td>";
							echo "	<td>".$row['Gender'] ."</td>";
							echo "	<td>".$row['address'] ."</td>";
							echo "	<td>".$row['s_date']."</td>";
							echo "	<td>".$row['e_date']."</td>";
							echo "	<td>".$row['gender_preference']."</td>";
							echo "	<td>".$row['student_count']."</td>";
							echo "	<td>".$row['ha_id']."</td>";
							echo "  <td><input type = 'checkbox' name = 'housingassignment'></td>";
							echo "</tr>";
						}

						echo "</table></form>";
					}
					
				}
				if($pickup_request == 'Yes')
				{
					echo "<h2>Available Transportation</h2>";
					$p_query = mysqli_query($dbc,"SELECT pickup_availability.id 
												  AS pa_id, availability_period
												  AS ap, student_count, DATE_FORMAT(pickup_date, '%W %D %M %Y')
												  AS p_date, luggage_count, airport_trips, volunteer_id,comments,Name,Gender
												  FROM pickup_availability
												  JOIN volunteer
												  ON '$p_date' >= pickup_availability.pickup_date
												  AND volunteer.id = pickup_availability.volunteer_id");

					$numrows2 = mysqli_num_rows($p_query);
					if ($numrows2!=0) 
					{
						
						echo "<form>";
						echo "<table class = 'table'>
						<thead class = 'thead-inverse'>
								<tr>
									<th>Volunteer Id</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Time of Day</th>
									<th>Pickup Date</th>
									<th>Number of Airport Trips</th>
									<th>Students per Airport trip</th>
									<th>Luggage Capacity</th>
									<th>Pickup Availability Id</th>
								</tr>
						</thead>
							";
						while ($row =mysqli_fetch_array($p_query))
						{
							echo "<tr>";
							echo "	<td>".$row['volunteer_id'] ."</td>";
							echo "	<td>".$row['Name'] ."</td>";
							echo "	<td>".$row['Gender'] ."</td>";
							echo "	<td>".$row['ap'] ."</td>";
							echo "	<td>".$row['p_date']."</td>";
							echo "	<td>".$row['airport_trips']."</td>";
							echo "	<td>".$row['student_count']."</td>";
							echo "	<td>".$row['luggage_count']."</td>";
							echo "	<td>".$row['pa_id']."</td>";
							echo "</tr>";
						}

						echo "</table></form>";
					}
				}
					
				//echo "<br>".$numrows2;
				//echo "<br>".$p_date;


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