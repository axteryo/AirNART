        var displayForm = function()
            {
          	if(document.getElementById("foreignform").checked)
            	{
                	$("#foreignregistration").show();
           	
              	}
              	else
              	{
              		$("#foreignregistration").hide();	
              	}
               if(document.getElementById("volunteerform").checked)
              	{
                 
             		$("#volunteerregistration").show();
              }
              else
              {
              	$("#volunteerregistration").hide();
              }
            }
function fscheckName()
{

     var name = document.forms["foreignregistration"]["name"];
 
  var pos = name.value.search(/^[A-Za-z]+ [A-Za-z]$/);
  alert(pos);
  if(pos!=0)
  {
    alert("The name you have entered" +
     name.value +
     " is not in the correct format.  (First Last) \n" + 
      " Please change it.");
    return false;
  }
  else
  {
    alert("worked");
    return true;
  }
}
function vscheckName()
{
 
    var name = document.forms["volunteerregistration"]["name"];
 
  var pos = name.value.search(/^[A-Za-z]+ [A-Za-z]$/);
  alert(pos);
  if(pos!=0)
  {
    alert("The name you have entered" +
     name.value +
     " is not in the correct format.  (First Last) \n" + 
      " Please change it.");
    return false;
  }
  else
  {
    alert("worked");
    return true;
  }
}
function fscheckGender()
{
  if(document.forms["foreignregistration"]["genderMale"].checked)
  {
    alert("You are male");
    return
  }
  else if(document.forms["foreignregistration"]["genderFemale"].checked)
  {
    alert("You are female");
    return true;
  }
  else
  {
    alert("you have not entered a gender");
    return false;
  }
}
function vscheckGender()
{
  if(document.forms["volunteerregistration"]["genderMale"].checked)
  {
    alert("You are male");
    return
  }
  else if(document.forms["volunteerregistration"]["genderFemale"].checked)
  {
    alert("You are female");
    return true;
  }
  else
  {
    alert("you have not entered a gender");
    return false;
  }
}
var fscheckEmail = function()
{
  var first = document.forms["foreignregistration"]["email"];
  var second = document.forms["foreignregistration"]["emailSecond"];
  var pos = first.value.search(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$/);
  // var pos = first.value.search(/^[A-Z] || [a-z]+, @+, [A-Z][a-z].com$/);
  
  if(first.value == "")
  {
    alert("Please enter an email");
    return false;
  }
  if(pos!=0)
  {
    alert("The Email you have entered " + first.value +
     " is not in the correct format. (something@somewhere.com)" + 
      " Please change it.");
    return false;
  }
  else if(first.value != second.value)
  {
    alert("Emails do not match");
    return false;
  }
  else
  {
    alert("good email");
    return true;
  }
}
var vscheckEmail = function()
{
  var first = document.forms["volunteerregistration"]["email"];
  var second = document.forms["volunteerregistration"]["emailSecond"];
  var pos = first.value.search(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$/);
  // var pos = first.value.search(/^[A-Z] || [a-z]+, @+, [A-Z][a-z].com$/);
  
  if(first.value == "")
  {
    alert("Please enter an email");
    return false;
  }
  if(pos!=0)
  {
    alert("The Email you have entered " + first.value +
     " is not in the correct format. (something@somewhere.com)" + 
      " Please change it.");
    return false;
  }
  else if(first.value != second.value)
  {
    alert("Emails do not match");
    return false;
  }
  else
  {
    alert("good email");
    return true;
  }
}
var fscheckPhone = function () 
{
  var phone = document.forms["foreignregistration"]["phone"];
  var pos = phone.value.search(/^[0-9]{3,4}-[0-9]{3}-[0-9]{4}$/);
  if(pos!=0)
  {
    alert("The phone you entered" + 
      phone.value +
    " is not the right format(ddd-ddd-dddd)");
    return false;
  }
  else
  {
    return true;
  }

}
var vscheckPhone = function () 
{
  var phone = document.forms["volunteerregistration"]["phone"];
  var pos = phone.value.search(/^[0-9]{3,4}-[0-9]{3}-[0-9]{4}$/);
  if(pos!=0)
  {
    alert("The phone you entered" + 
      phone.value +
    " is not the right format(ddd-ddd-dddd)");
    return false;
  }
  else
  {
    return true;
  }

}
var chkPassword = function () 
{
  
  var first =document.forms["volunteerregistration"]["password"];
  var second = document.forms["volunteerregistration"]["passwordSecond"];
  
  if(first.value != second.value)
  {
    alert("the passwords do not match!" + second.value);
    return false;
  }
  else
  { alert("good");
    return true;
  }
}
var checkMajor = function() 
{
    var major = document.getElementById("major");
    var pos = major.value.search(/[A-Za-z]/);
    if(pos!=0)
    {
      alert("Please enter a major");
      return false;
    }else
    {
      alert("valid");
      return true;
    }
}
var checkLevelofStudy = function() 
{
    var los = document.getElementById("los");
    var pos = los.value.search(/[A-Za-z]/);
    if(pos!=0)
    {
      alert("Please enter a major");
      return false;
    }else
    {
      alert("valid");
      return true;
    }
}


            
