<?php
$username = $_POST['_username'];
$password = $_POST['_password'];
$username = trim($username);
$password = trim($password);
$filename = "ignoredusingrobots.txt";
$handle = fopen($filename, "r");
$contents = (string) fread($handle, filesize($filename));
$details = explode(" ", $contents);
if ($username == trim($details[0]) && $password == trim($details[1])) {
    echo "pb65IB";
}
else {
    echo "Invalid Username/Password";
}
fclose($handle);
?>