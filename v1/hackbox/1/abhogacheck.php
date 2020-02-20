<?php 
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $comment = "";
$nameb = false;
$queryb = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    echo $nameErr;
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    $nameb = true;
  } 
  
  if (empty($_POST["comment"])) {
    $comment = "";
    $comErr = "\nQuery is required";
    echo $comErr;
  } else {
    $comment = test_input($_POST["comment"]);
    $queryb = true;
  }
  
  
  if($name=== "index.php"){
  	echo "Here is your token: Fb2epi";
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>