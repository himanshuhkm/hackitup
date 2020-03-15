<?php
session_start();
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
   $name = $_SESSION['name'];
   $phonenumber = $_SESSION['phonenumber'];
   $college = $_SESSION['college'];
   $usertoken = $_GET['usertoken'];
   echo "Hack It Up Sneak Peek has concluded. You cannot submit tokens anymore. Thank you for being a part!";
}
else {
	header("Location: ../");
  	exit;
}

?>