<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cheesetouched');
define('DB_PASSWORD', 'iamhardwell');
define('DB_NAME', 'hackitup');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>