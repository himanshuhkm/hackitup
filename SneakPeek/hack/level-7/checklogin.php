<?php
$username = $_POST['_username'];
$username = trim($username);
$filename = "ignoredusingrobots.txt";
$handle = fopen($filename, "r");
$contents = (string) fread($handle, filesize($filename));
$details = explode(" ", $contents);
if ($username == trim($details[0])) {
    echo "ZZu7Po0";
}
else {
    echo "Invalid Value";
}
fclose($handle);
?>