<?php
   include("config.php");
   $cookie = $_COOKIE["level-6"];
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       if($cookie==="donteverignorecookies") {
           echo "VItMpz";
           /*
          $sql = "SELECT id FROM level WHERE username = '$myusername' and password = '$mypassword'";
          $result = mysqli_query($link,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $count = mysqli_num_rows($result);
          if($count == 1) {
              echo "VItMpz";
          }else {
             echo "Incorrect";
          }
          */
       }
       else {
           echo "Invalid Session";
            header('Session: Ofcourse I need a cookie man. You think i\'m gonna let you get pass without it?');
            header('Cookie: level-current = Encrypted Fish(Wx3SKXKeQWynsCLcKnzfpr1HYgeG/DFL)');
            header('Key: SrmWhhc@2019');
            header('Mode: CTR');
            header('Base: 64');
       }
   }
   else {
       echo "Invalid Session";
   }
?>