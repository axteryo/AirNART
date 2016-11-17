//pswd_chk.js
// an example of input password checking using the submit event

//The event handler function for password checking .
function chkPasswords()
{
	var init = document.getElementById("initial");
	var sec = document.getElementById("second");
	if(init.value == " ")
	{
		alert("you did not enter a password \n" +
			"please do so now.");
		return false;
	}
	if(init.value != sec.value)
	{
		alert("The two passwords you entered are not the same \n" + "please re-enter both now");
		return false;
	}
	else
	{
		return true;
	}

}