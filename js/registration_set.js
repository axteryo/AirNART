document.getElementById("foreignform").onchange =displayForm;
document.getElementById("volunteerform").onchange =displayForm;



 	document.forms["foreignregistration"]["name"].onchange =fscheckName;
 	document.forms["volunteerregistration"]["name"].onchange =vscheckName;
 	document.forms["foreignregistration"]["emailSecond"].onblur =fscheckEmail;
 	document.forms["volunteerregistration"]["emailSecond"].onblur =vscheckEmail;
 	document.forms["foreignregistration"]["phone"].onchange =fscheckPhone;
 	document.forms["volunteerregistration"]["phone"].onchange =vscheckPhone;
 	document.forms["foreignregistration"]["major"].onchange =checkMajor;
 	document.forms["foreignregistration"]["los"].onchange =checkLevelofStudy;
 	document.forms["volunteerregistration"].onchange =vscheckGender;
 	document.forms["foreignregistration"].onchange =fscheckGender;
 	document.forms["volunteerregistration"]["passwordSecond"].onchange = chkPassword;
/*document.getElementById("name").onchange =checkName(name);
document.getElementById("emailSecond").onblur = chkEmail;
document.getElementById("phone").onchange = chkPhone;
document.getElementById("major").onchange = chkMajor;
document.getElementById("passwordSecond").onblur= chkPassword;
document.getElementById("myForm").onsubmit= chkPassword;*/
