<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sneakpeak');
define('DB_PASSWORD', 'NeverTakeItEasy');
define('DB_NAME', 'hackitupsneakpeak');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>