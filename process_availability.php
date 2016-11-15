<?php
include("connection.php");
session_start();
if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
{
  echo "In order to reaccess this page, you must login!";
  header("Location:index.php");
}
if($_SERVER['REQUEST_METHOD']=='POST')
{

	$user_email = $_SESSION['login_email'];
	$q = mysqli_query($dbc,"SELECT id FROM volunteer WHERE Email = '$user_email'");
	$numrows = mysqli_num_rows($q);
		if($numrows !=0)
		{
			$r = mysqli_fetch_array($q);
			$user_id = $r['id'];
			if(isset($_POST['pickupAvailability']))
			{
				$pickup_date = $_POST['pickupdate'];
				$availability_period = $_POST['availabilityperiod'];
				$student_count = $_POST['studentcount'];
				$luggage_count = $_POST['luggagecount'];
				$airport_trips = $_POST['numoftrips'];
				$comments = $_POST['comments'];
				


				if(!empty($pickup_date) && !empty($availability_period) && !empty($student_count) && !empty($luggage_count) && !empty($airport_trips) && !empty($comments))
				{
					$q = mysqli_query($dbc,"INSERT INTO pickup_availability(pickup_date,availability_period,student_count,luggage_count,airport_trips,volunteer_id,comments) VALUES ('$pickup_date', '$availability_period', '$student_count', '$luggage_count', '$airport_trips', '$user_id', '$comments')");
					echo "Everything worked!!";

				}
				else
				{
					echo "There is a system error";
				}
			}
			if(isset($_POST['housingAvailability']))
			{
				$address = $_POST['address'];
				$student_count = $_POST['studentcount'];
				$start_date = $_POST['startdate'];
				$end_date = $_POST['enddate'];
				$gender_preference = $_POST['genderpreference'];
				$comments = $_POST['comments'];
				
				if(!empty($address) && !empty($student_count) && !empty($start_date) && !empty($end_date) && !empty($gender_preference) && !empty($comments))
				{
					$q = mysqli_query($dbc,"INSERT INTO housing_availability(address,student_count,start_date,end_date,gender_preference,comments,volunteer_id) VALUES('$address', '$student_count', '$start_date', '$end_date', '$gender_preference', '$comments', '$user_id')");

					echo "YES IT WORKED";
				}
			}
		}
		else
		{
			echo "Got nothing!!!";
		}

}
else
{
	echo "please complete the form";
}



?>