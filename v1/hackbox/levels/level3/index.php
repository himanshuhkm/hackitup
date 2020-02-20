<?php

$ip = $_SERVER['REMOTE_ADDR'];
$access_key = 'e4e8b9efdd988261006b8f6051ea80ef';

// Initialize CURL:
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

$coun = $api_result['country_name'];

session_start();
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
   $name = $_SESSION['name'];
   $phonenumber = $_SESSION['phonenumber'];
   $college = $_SESSION['college'];
   $curl = curl_init();
   curl_setopt_array($curl, array(
   	CURLOPT_URL => "https://hackitup.herokuapp.com/currentlevel/".$phonenumber,
  	CURLOPT_RETURNTRANSFER => true,
  	CURLOPT_ENCODING => "",
  	CURLOPT_MAXREDIRS => 10,
  	CURLOPT_TIMEOUT => 30,
  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	CURLOPT_CUSTOMREQUEST => "GET",
  	CURLOPT_HTTPHEADER => array(
    	"Content-Type: application/x-www-form-urlencoded"
  	),
  ));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	if ($err) {
  		echo "cURL Error #:" . $err;
	}
	else {
		$json = json_decode($response, true);
		if ($json["level"] !== 1) {
			header("Location: ../".$json["level"]);
		}
		else {
			header("Location: ../thankyou");
		}
	}
}
else {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hack-It-Up! | Level 1</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125937952-1');
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">

  <style>
  #location{
  color: #a1a1a1;
  display: none;
  }
  </style>
</head>

<body>
  <img id="logo" src="../../login/whhc.png"></div>
  <img id="text" src="../../login/logo.png"></div>
  <div class="container">
  
    <span class="txt anim-text-flow"><?echo 'Use "Pastarnak" Browser to access this page form';?></span><p id="location">Taj Mahal</p>
    <span class="txt anim-text-flow"><?if($coun==='India'){ echo "noobHaiTu.php";}?></span>
 
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>

