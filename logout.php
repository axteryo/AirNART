<?php
	session_start();
	session_destroy();
	echo "<h2> Have a nice day</h2>";
	header("Location:index.php");

?>