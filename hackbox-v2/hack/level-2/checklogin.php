<?php
$feedback = $_POST['_feedback'];
$feedback = trim($feedback);
if ($feedback == "<s<script>cript>alert();</s</script>cript>" || $feedback == "<sc<script>ript>alert();</sc</script>ript>" || $feedback == "<scr<script>ipt>alert();</scr</script>ipt>" || $feedback == "<scri<script>pt>alert();</scri</script>pt>" || $feedback == "<scrip<script>t>alert();</scrip</script>t>") {
    echo "<script> alert('AFcpGQ'); </script>";
}
else {
    echo "Invalid Username/Password";
}
?>