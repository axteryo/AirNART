
<?php  include("studentCover.html"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Request form</title>
</head>
<body>
<div class="content container">
  <div class="row">
      <h1 class="h1-title">Welcome to AirNART's Student Page</h1>  
  </div>

  <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 ">
    <form class="form-signin">
      <h2 class="form-signin-heading">Logged in as Student</h2>       
      <h4 class="form-signin-heading"><a href="index.html">Log Out</a></h4>
        <input align="right" type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">     Remember me
        <br/>
        
      </label>
     
      <hr>
    </form>
  </div>
 
   
 <span class="col-xs-12 col-sm-8 col-md-8">
  <h2>Please enter your request details</h2><br>
  <form>
      <div class="h3-title">
      <h3>Flight Information</h3>
      </div>
      <br><br>
      <label>
      Do you require aiport pickup?
      </label>
      <input type="radio" name="needAP" value="Yes"> Yes
  	  <input type="radio" name="needAP" value="No"> No<br><br>
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
      <input type="radio" name="needHousing" value="Yes"> Yes
      <input type="radio" name="needHousing" value="No"> No<br><br>
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
      <textarea rows="4" cols="100" name="comments" form="requestform">Please tell us any special needs or concerns you might have....</textarea><br><br>
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



      <button class="btn btn-lg btn btn-warning">Submit Request</button>
  </form> 
    </span>
  </div>


  

</div><!-- content container -->
  <footer class="container-fluid col-md-12">
  <p>Copyright 2016 AirNart Inc. </p>
</footer>



<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>