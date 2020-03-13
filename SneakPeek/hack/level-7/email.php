<?php
   include("config.php");
   $cookie = $_COOKIE["level-7"];
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
           echo "https://usamaejaz.com/cloudflare-email-decoding/";
            header('Session: try to mess with your body');
            header('Cookie: no need');
            header('Key: 543938142127353735313e352e7a373b38');
            header('Mode: CTR');
            header('Base: 64');
            header('');

       }
   else {
       echo "Invalid Session";
   }
?>