<?php
include 'analytics.html';
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
	} else {
		$json = json_decode($response, true);
		if ($json["level"] !== 8) {
			header("Location: ../".$json["level"]);
		}
	}
}
else {
header("Location: ../../login/");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hack-It-Up! Caesar Cipher</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
<script>
//Alphabet: a-z
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125937952-1');
  //tzojcyzbd.kck
  
  //shift: 21
</script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?=time();?>">

</head>

<body>
  <img id="logo" src="../../login/whhc.png"></div>
  <img id="text" src="../../login/logo.png"></div>
  <div class="container">
  <span style="padding-top:5%;" class="txt anim-text-flow">(A1Z26(18,19,1(Key)));</span>
  <img src="cut.png" height="30px" width="30px" /><span class="txt anim-text-flow">Liw3BIh5A5tUlBbPfpSIe1ZXcR4qsD9Je2TzZX4jG/JDGiOPa5MHNv9GzH4Bft5FNHGGyWs2E0sUnxCuC3vuqr==</span>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
<script>//courtesy of cryptii.com
</script>
</html>