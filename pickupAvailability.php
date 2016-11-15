<?php 
include("connection.php");
include("volunteerCover.html");
?>
<!DOCTYPE html>
<html>
<head>
<!--
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">-->
  <title>Bootstrap</title>
</head>


<body>

<div class="content container bgshadow">
  <div class="row">
    <section class="col-sm-12 col-xs-12">
      <h1 class="h1-title">Volunteer for Pick-up</h1> 
      </section> 
  </div>

<div class="col-xs-12 col-sm-4 col-md-3 ">
    <form class="form-signin">
      <h2 class="form-signin-heading">Logged in as Volunteer</h2>       
      <p class="form-signin-heading"><a href="logout.php">Log Out</a></p>
        <br/>
      <hr>
    </form>
  </div>
    <div class="col-md-9">



      <span>
        <h2>Set Pick-up availability</h2>
        <br>
        <form action="process_availability.php" method="post">
        <label> Pick-up Date</label>
        <input type="date" name="pickupdate"><br><br>
        <label> Availability period</label><br>
        <input type="radio" name="availabilityperiod" value="Morning">Morning(7am - 12pm)<br><br>
        <input type="radio" name="availabilityperiod" value="Afternoon">Afternoon(12pm - 5pm)<br><br>
        <input type="radio" name="availabilityperiod" value="Evening">Evening(5pm - 10pm)<br><br>
        <label> Number of Students able to Pickup</label>
        <input type="text" name="studentcount"><br><br>
        <label>Amount of Luggage Space(1 bag, 2 bags,etc)</label>
        <input type="text" name="luggagecount"><br><br>
        <label> Number of Trips(1,2,3,etc)</label><br>
        <input type="text" name="numoftrips"><br><br>
        <label> Comments</label>
        <textarea rows="4" cols="100" name="comments"></textarea><br><br>
        


          <input type="submit" name="pickupAvailability" class="btn btn-warning" value="submit"> 
          <input type="reset" class="btn btn-warning">         
        </form>
      </span>
    </div>
  </div>



 

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
<script src="js/volunteer_for_transportation.js"></script>


</body>
 <footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>

</html>