<?php

$session = $_COOKIE["JSESSIONID"];
$username = $_POST["username"];
$password = $_POST["password"];
//$username = str_replace(' ', '', $username);
//$password = str_replace(' ', '', $password);

if($session==="798480bjkbkjbcdw090WSiba") {
    if($username==="\"or\"\"=\"" && $password==="\"or\"\"=\"") {
        
        echo "VItMpz";
        
    } else if((strpos($username, 'OR1=1')==true) && (strpos($password, 'OR1=1') == true)) {
    
        echo "VItMpz";
    
        
    } else {
        
        echo "Invalid Login Credentails";
        
    }
    
} else {
    
    echo "Inavlid Login Credentails or Session";
    setcookie("JSESSIONID", "798480bjkbkjbcdw090WSiba");
    
}

?>