<?php
	include('connection.php');
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['foreignregistration']))
		{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$afiliation = $_POST['afiliation'];
		$major = $_POST['major'];
		$levelofstudy = $_POST['levelofstudy'];

			if(!empty($name) && !empty($email) && !empty($gender) && !empty($phone) && !empty($password) && !empty($afiliation) && !empty($major) && !empty($levelofstudy))
			{
				mysqli_query($dbc, "INSERT INTO student (Name, Gender, Email, Phone, Password, Affiliation, Major, LevelofStudy) VALUES ('$name', '$gender', '$email', '$phone', '$password', '$afiliation', '$major', '$levelofstudy')");
				echo "Row inserted, everything worked out ok!";
			}
			else
			{
				echo "ERROR: you left some values blank!";
			}
		}
		else if(isset($_POST['volunteerregistration']))
		{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$afiliation = $_POST['afiliation'];
		
			if(!empty($name) && !empty($email) && !empty($gender) && !empty($phone) && !empty($password) && !empty($afiliation))
			{
				mysqli_query($dbc, "INSERT INTO volunteer (Name, Gender, Email, Phone, Password, Afiliation) VALUES ('$name', '$gender', '$email', '$phone', '$password', '$afiliation')");
				echo "Row inserted, everything worked out ok!";
			}
			else
			{
				echo "ERROR: you left some values blank!";
			}
		}
		else
		{
			echo "There is a system error. ";
		}

	}
	else{
	echo "<strong>Please complete the form...</strong>";
}

?>