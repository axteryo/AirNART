<?php
include("connection.php");
    session_start();
    if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
    {
      echo "In order to reaccess this page, you must login!";
      header("Location:index.php");
    }
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
		$pickup_request = $_POST['needpickup'];
		$housing_request = $_POST['needhousing'];
		$bag_amount = $_POST['bag_amount'];

		$user_email = $_SESSION['login_email'];
		$q = mysqli_query($dbc,"SELECT id FROM student WHERE  Email = '$user_email'");
		$numrows = mysqli_num_rows($q);
		if($numrows !=0)
		{
			$r = mysqli_fetch_array($q);
			$user_id = $r['id'];

			//if(!empty($pickup_request) && !empty($housing_request) && !empty($user_id))
			//{
				mysqli_query($dbc,"INSERT INTO request (student_id, pickup_request, housing_request, bag_amount) VALUES('$user_id','$pickup_request', '$housing_request', '$bag_amount')");

				if($pickup_request == 'Yes')
				{	
					$r_query = mysqli_query($dbc,"SELECT * FROM request WHERE '$user_id'=student_id");
					$row = mysqli_fetch_array($r_query);
					$request_id = $row['id'];
					$departure_name = $_POST['departurename'];
					$departure_number = $_POST['departurenumber'];
					$departure_date = $_POST['departuredate'];
					$departure_time = $_POST['departuretime'];
					$arrival_name = $_POST['arrivalname'];
					$arrival_number = $_POST['arrivalnumber'];
					$arrival_date = $_POST['arrivaldate'];
					$arrival_time = $_POST['arrivaltime'];

					mysqli_query($dbc,"INSERT INTO flight(departure_name, departure_number, departure_date, departure_time, arrival_name, arrival_number, arrival_date, arrival_time, student_id, request_id) VALUES('$departure_name', '$departure_number', '$departure_date', '$departure_time', '$arrival_name', '$arrival_number', '$arrival_date', '$arrival_time', '$user_id', '$request_id')");
				}
				if($housing_request == 'Yes')
				{
					$r_query = mysqli_query($dbc,"SELECT * FROM request WHERE '$user_id'=student_id");
					$row = mysqli_fetch_array($r_query);
					$request_id = $row['id'];
					$housing_date = $_POST['housingdate'];
					$numofdays = $_POST['numofdays'];
					$nextdestination = $_POST['nextdestination'];
					$comments = $_POST['comments'];

					if(!empty($housing_date) && !empty($numofdays) && !empty($nextdestination))
					{
						mysqli_query($dbc,"INSERT INTO housing(student_id, time_period, NumberofDays, next_destination, comments, request_id) VALUES('$user_id','$housing_date', '$numofdays', '$nextdestination', '$comments', '$request_id')");
					}
				}
				if($housing_request == 'No')
				{
					$resident_name  = $_POST['nonaffiliatedname'];
					$resident_phone = $_POST['nonaffiliatedphone'];
					$resident_address = $_POST['nonaffiliatedaddress'];
					if(!empty($resident_name) && !empty($resident_phone) && !empty($resident_address))
					{
						mysqli_query($dbc, "INSERT INTO nonaffiliated_housing(resident_name, resident_phone, resident_address, student_id) VALUES('$resident_name', '$resident_phone', '$resident_address', '$user_id')");
					}

				}
			//}
			/*else
			{
				echo "ERRORS: you left some values blank!!";
			}*/
		}
		else
		{
			echo "Thee is a system error....";
		}

}
else
{
	echo "Please resubmit the form";
}



?>