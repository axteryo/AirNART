<?php

    session_start();
    if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
    {
      echo "In order to reaccess this page, you must login!";
      header("Location:index.html");
      exit;
    }

    include("connection.php");
    include("studentCover.html"); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!--<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">-->
  <title>Request form</title>
</head>
<section class="bgimagerequest"></section>

<div class="fluid-container">
  <nav class="navbar-custom">
    <div class="container">
      <div class="row">
        <ul class ="nav-custom">
          <li class = "active navli col-md-3 col-sm-3 col-xs-12"> <a href = "studentHome.php" class="navlink">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<body class="">


<div class="content container bgshadow">
  <div class="row">
    <section class="col-sm-12">
      <h1 class="h1-title">Air-Nart Requests Form</h1>    
    </section>
  </div>

 
      <div class="col-xs-12 col-sm-4 col-md-3 ">
    <form class="form-signin">
      <h2 class="form-signin-heading">Logged in as Student</h2>       
      <p class="form-signin-heading"><a href="logout.php">Log Out</a></p>
        <br/>
      <hr>
    </form>
  </div>
 <span class="col-xs-12 col-sm-9 col-md-9">
  <h2>Please enter your request details</h2><br>
  <form name="requestform" action="process_requests.php" method="post">
      <div class="h3-title">
      <h3>Flight Information</h3>
      </div>
      <br><br>
      <label>
      Do you require aiport pickup?
      </label>
      <input type="radio" name="needpickup" value="Yes"> Yes
  	  <input type="radio" name="needpickup" value="No"> No<br><br>
      <h4>Departure Flight</h4>
      <label>
        Home Country Airline Name
      </label>
      <br>
      <input type="text" name="departurename"><br><br>
      
      
      <label>
        Departure Flight Number
      </label>
      <br>
       <input type="text" name="departurenumber"><br><br>
      <label>
        Departure Date
      </label>
      
      <input type="date" name="departuredate">
      <label>
        Departure Time
      </label>
      
      <input type="time" name="departuretime"><br><br>
      <h4>Arrival Flight</h4>
      <label>
        Arrival Airline Name
      </label>
      <br>
      <input type="text" name="arrivalname"><br><br>
    
      <label>
        Arrival Flight Number
      </label>
      <br>
      <input type="text" name="arrivalnumber"><br><br>
      <label>
        Arrival Date
      </label>
      
      <input type="date" name="arrivaldate">
      <label>
        Arrival Time
      </label>
      
      <input type="time" name="arrivaltime"><br><br>
      <br><br>
      <div class="h3-title">
      <h3>Housing Information</h3>
      </div>
      <br><br>
      <label>
        Do you require housing?
      </label>
      <input type="radio" name="needhousing" value="Yes"> Yes
      <input type="radio" name="needhousing" value="No"> No<br><br>
      <h4>When?</h4>
      <label>Date</label>
      <input type="date" name="housingdate">
      
      <label>Number of days</label>
      <input type="text" name="numofdays">
      <br><br>
      <label>Next Destination(address)</label>
      <br>
      <input type="address" name="nextdestination"><br><br>
      <label>Comments</label>
      <textarea rows="4" cols="100" name="comments" placeholder="Please tell us any special needs or concerns you might have...."></textarea><br><br>
      <h4>Where would you like to be sent?</h4><br>
      <label>Resident name</label>
      <br>
      <input type="text" name="nonaffiliatedname">
      <br>
      <label>Resident phone</label>
      <br>
      <input type="text" name="nonaffiliatedphone"><br><br>
      <label>Resident Address</label>
      <br>
      <input type="address" name="nonaffiliatedaddress"><br><br>
      <h4>Got any luggage?</h4>
      <br>
      <label>
      Amount of Luggage(1,2,3)
      </label>
      <br>
      <input type="text" name="bag_amount">
      <br><br>


      <button class="btn btn-lg btn btn-warning" type="submit">Submit Request</button>
  </form> 
    </span>
  </div>


  
 
 
</div><!-- content container -->

<!--
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
<script src="js/script.js"></script>
</body>

<footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>
</html>