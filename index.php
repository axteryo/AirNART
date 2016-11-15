<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>AirNART</title>
</head>

<header>
  <section class="fluid-container">
    <div class="row pageheading">
      <h1 class="col-xs-9 col-sm-10 col-md-10 h1-head">AIR-NART</h1>
    </div>
  </section>
</header>
<!--
<section class="bgimage">


  </section>-->
<!--
<div class="fluid-container">
  <nav class="navbar-custom">
    <div class="container">
      <div class="row">
        <ul class ="nav-custom">
          <li class = "active navli col-md-3 col-sm-3 col-xs-12"> <a href = "volunteerHome.php" class="navlink"></a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
-->
</header>
<body class="">
<div class="container bgshadow">
<h1 class="h1-title">Welcome to AirNART</h1>


<div class="col-sm-4 col-md-3">
  <form class="form-signin" name="login" action="login.php" method="post">       
    <h2 class="form-signin-heading">Login</h2>
      <input type="text" class="form-control" name="login_email" placeholder="Enter your email" required="" autofocus="" />
      <input type="password" class="form-control" name="login_password" placeholder="Enter your password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
  </form>
</div>


<span class="col-sm-8 col-md-9 spanpad">
<h2 align="center">You are a Student</h2		>
<span class="spanpad">
      <div class="row">
        <img align="right" src="assets/studentimg.jpg" class="img-responsive bgimage2 col-sm-6" height="500" width="400">
        <p class="col-sm-6">Are you an international student? You have the ability to request for a a pick up from a volunteer willing to take you to your destination. In addition, there are volunteers who are offering housing for international students. The purpose of this is to make it convenient for the students to have a place to live in while they are attending school rather than purchasing a place.
      </br>
      </br>
       <a href="studentRegistration.html"><button class="btn btn-lg btn btn-warning">Register As A Student</button></a>
        </p>
      </div>


      </span>
      <h2 align="center"  >You are a Volunteer</h2>
      <span class="spanpad">

      <div class="row">
      <p class="col-sm-6">  When registering a volunteer, you are offering  the service of providing either housing/pick up, or both for international students. You are willing to pick the students up from the airport and take them to their listed destination. For housing, you are providing a place to stay for students during the duration students are attending school.
      </br>
      </br>
      <a href="volunteerRegistration.html"><button class="btn btn-lg btn btn-warning">Register As A Volunteer</button></a> 
     </p>
     <img src="assets/international.jpg" class="img-responsive bgimage2 col-sm-6" height="500" width="400">
     </div>
</span>
</span>

</div>

</div>


<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>

 
 
<footer class="container-fluid col-md-12">
  <span>
Copyright 2016 AirNart Inc.
  </span>
</footer>


</html>