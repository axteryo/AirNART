

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
				<h1>Manage Requests</h1>
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

				<p> Blah blah bvlah requesrs blah.</p>


				<span>
					<h3><strong>Pickup and transportation requests</strong></h3>
					<?php
						$record = mysqli_query($dbc,"SELECT student.id AS s_id,
													 Name,
													 Email, 
													 Phone, 
													 Gender, 
													 DATE_FORMAT(arrival_date,'%W %D %M %Y') as a_date,
													 arrival_name AS airline, 
													 flight.student_id AS f_s_id, 
													 request.student_id AS r_s_id, 
													 request_status AS stat, 
													 request.id AS r_id
													 FROM student
													 INNER JOIN request ON student.id = request.student_id  
													 INNER JOIN flight ON request.id = flight.request_id
													 ORDER BY a_date DESC");

						$numrows = mysqli_num_rows($record);

						if($numrows !=0)
						{
	

							echo"<table class = 'table'>
									<tr>
										<th>Student ID </th>
										<th>Name </th>
										<th>Email </th>
										<th>Phone </th>
										<th>Gender</th>
										<th>Arrival Date</th>
										<th>Airline </th>
										<th>Request ID</th>
									</tr>";

							while ($row = mysqli_fetch_array($record))
							{
								echo "<tr>";
								echo 	"<td>".$row['s_id']."</td>";
								echo 	"<td>".$row['Name']."</td>";
								echo 	"<td>".$row['Email']."</td>";
								echo 	"<td>".$row['Phone']."</td>";
								echo 	"<td>".$row['Gender']."</td>";
								echo 	"<td>".$row['a_date']."</td>";
								echo 	"<td>".$row['airline']."</td>";
								echo 	"<td>". "<a href = 'assignmentForm.php?r_id=".$row['r_id']."'>" .$row['r_id']. "</td>";
								echo "</tr>";
							}

							echo "</table>";
						}
						else
						{
							echo "Something has occured";
						}

					?>
					
				</span>
				<span>
				<h3><strong>Housing requests</strong></h3>
				<?php
					$record2 = mysqli_query($dbc,"SELECT student.id as s_id,
												  Name,
												  Email,
												  Phone,
												  Gender,
												  DATE_FORMAT(time_period,'%W %D %M %Y') as t_period,
												  housing.id as h_id,
												  request.id as r_id
												  FROM student
												  JOIN request ON student.id = request.student_id
												  JOIN housing ON housing.request_id = request.id
												  ORDER BY time_period
												  ");
						$numrows = mysqli_num_rows($record);

						if($numrows !=0)
						{
							echo"<table class = 'table'>
									<tr>
										<th>Student ID </th>
										<th>Name </th>
										<th>Email </th>
										<th>Phone </th>
										<th>Gender</th>
										<th>Housing Date</th>
										<th>Request ID</th>
									</tr>";

							while ($row = mysqli_fetch_array($record2))
							{
								echo "<tr>";
								echo 	"<td>".$row['s_id']."</td>";
								echo 	"<td>".$row['Name']."</td>";
								echo 	"<td>".$row['Email']."</td>";
								echo 	"<td>".$row['Phone']."</td>";
								echo 	"<td>".$row['Gender']."</td>";
								echo 	"<td>".$row['t_period']."</td>";
								echo 	"<td>".$row['r_id']."</td>";
								echo "</tr>";
							}

							echo "</table>";

						}
	


				?>
					

				</span>
				
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