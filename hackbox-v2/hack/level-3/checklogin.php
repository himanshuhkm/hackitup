<?php
$feedback = $_POST['_feedback'];
$feedback = trim($feedback);
if ($feedback == "<scr<script>ipt>alert();</scr</script>ipt>") {
    echo "<script> alert('AFcpGQ'); </script>";
}
else {
    echo "Invalid Username/Password";
}
?>