<?php
   include("config.php");
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 
   $sql = "SELECT id FROM level WHERE username = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($link,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count == 1) {
       echo "fnZSV5";
       
   }else {
       echo "Incorrect username/password";
   }
?>

<html>
    <!--I'd take it if you can just post it to me.-->
</html>