<?php

    session_start();
    if(!(isset($_SESSION['login'])&& $_SESSION['login']!=''))
    {
      echo "In order to reaccess this page, you must login!";
      header("Location:index.php");
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
  <title>Student Home</title>
</head>
<section class="bgimagestudent"></section>

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

<!--<img class="img-responsive center-block" src="airport.jpg" alt="city" height="300px" width="700px">-->
<div class="content container bgshadow">
  <div class="row">
    <section class="col-sm-12 col-xs-12">
      <h1 class="h1-title">Welcome to AirNART's Student Page</h1> 
      </section> 
  </div>

  
  <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <h3>Hello User1</h3>
        <ul>
        <li>Status: Student</li>
        <li>New Messages:(0)</li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
      <hr>
  </div>

    <div class=" col-md-9 col-sm-9 col-xs-12">
    <span>
    <p>Here you can view and edit your current requests, as well as make additional requests, update your information!</p>  
    <h3>Your Current Requests</h3>
    <p>
    <form>
    <span>

    </span><!--
    <h4>You have <span style="color:Red">2</span> ride(s) Scheduled!</h4>
    <img class="img-responsive left-block" src="planeIcon.jpg" alt="city" height="50px" width="50px">

    <h4><span style="color:Red">Boston</span>|3:30 Thursday|3 Bags|Rider: <a href="index.html">John Doe</a></h4></h4>

    <img class="img-responsive left-block" src="carIcon.jpg" alt="city" height="50px" width="50px">

    <h4><span style="color:Red">Atlanta</span>|4:42 Monday|600 Bags|Rider: <a href="index.html">Jason Doe</a></h4></h4><br>
    <br>
    <button class="btn btn-lg btn btn-warning">Cancel Ride?</button><br><br>--> 
    <button class="btn btn-lg btn btn-warning"><a href="requestForm.php" class="btn-a">Request Pickup | Housing</a></button>
   
    </form> 
    </p>
    </span>
    </div>
  </div>


  
 <br/> <br/> <br/>
</div>



</body>
 
   <footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc. </span>
</footer>
</html>