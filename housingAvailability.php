<?php include("volunteerCover.html");?>
<!DOCTYPE html>
<html>
<head>
  <!--<meta charset="UTF-8">
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
      <h1 class="h1-title">Volunteer For Housing</h1> 
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
        <h2>Set Housing Availability</h2>
        <br>
        <form action="process_availability.php", method="post">
        <label>Address</label>
        <input type="text" name="address">
        <br><br>
        <label>Number of students able to host(1,2,etc.)</label>
        <br>
        <input type="text" name="studentcount">
        <br><br>
        <label>Hosting Period</label>
        <br>
        <label>Start</label>
        <input type="date" name="startdate">
        <label>End</label>
        <input type="date" name="enddate">
        <br><br>
        <label>Gender Preference</label> 
        <br>
        <input type="radio" name="genderpreference" value="Male" >Male<br>
        <input type="radio" name="genderpreference" value="Female" >Female<br>
        <input type="radio" name="genderpreference" value="Both" >Both
        <br><br>
        <label> Comments</label>
        <textarea rows="4" cols="100" name="comments"></textarea><br><br>
        


          <input type="submit" name="housingAvailability" class="btn btn-warning" value="submit"> 
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
Copyright 2016 AirNart Inc. </span>
</footer>

</html>