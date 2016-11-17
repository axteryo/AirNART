function checkName()
{
	var name = document.getElementById("name");
	var pos = name.value.search(/^[A-Za-z]+$/);
	alert(pos);
	if(pos!=0)
	{
		alert("The name you have entered" +
		 name.value +
		 " is not in the correct format.  (First,Last,middle-Initial.) \n" + 
			" Please change it.");
		return false;
	}
	else
	{
		alert("worked");
		return true;
	}
}
var chkEmail = function()
{
	var first = document.getElementById("email");
	var second = document.getElementById("emailSecond");
	var pos = first.value.search(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[a-z]{2,3}$/);
	// var pos = first.value.search(/^[A-Z] || [a-z]+, @+, [A-Z][a-z].com$/);
	alert(pos);
	if(first.value == "")
	{
		alert("Please enter an email");
		return false;
	}
	if(pos!=0)
	{
		alert("The Email you have entered " + email.value +
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
var chkPhone = function () 
{
	var phone = document.getElementById("phone");
	var pos = phone.value.search(/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/);
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
	alert("Check password");
	var first =getElementById("password");
	var second = getElementById("passwordSecond");
	
	if(first.value != second.value)
	{
		alert("the passwords do not match!");
		return false;
	}
	else
	{	alert("good");
		return true;
	}
}