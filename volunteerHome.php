<?php 
include("connection.php");
include("volunteerCover.html");
?>

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
      <h1 class="h1-title"> AirNART's Volunteer Page</h1> 
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


    <span class=" col-md-9 col-sm-8 col-xs-12">
    <span>
    <p>Here you can Set and Edit your availability for housing and transportation!</p>  
    </span>
   <row>
    <span class="col-md-4 col-xs-12">
     <a href="housingAvailability.php" class="btn-a"><button class="btn btn-lg btn btn-warning">Volunteer for Housing</button></a>
     </span>
    <span class="col-md-4 col-xs-12">


    <a href="pickupAvailability.php" class="btn-a"><button class="btn btn-lg btn btn-warning">Volunteer for Pick-up</button></a>

  </span>
   </row>

    </span>




      
<!--
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>-->
</div>

</body>

 
   <footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>
</html>