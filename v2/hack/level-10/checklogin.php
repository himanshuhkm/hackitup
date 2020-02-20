<?php
$username = $_POST['_username'];
$password = $_POST['_password'];
$username = trim($username);
$password = trim($password);
if ($username == "steganography" && $password == "isimportant") {
    echo "uLAPXO";
}
else {
    echo "Invalid Username/Password";
}
?>