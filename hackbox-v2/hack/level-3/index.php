<?php
session_start();
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
   $name = $_SESSION['name'];
   $phonenumber = $_SESSION['phonenumber'];
   $college = $_SESSION['college'];
   $curl = curl_init();
   curl_setopt_array($curl, array(
   	CURLOPT_URL => "https://hackitup.herokuapp.com/hackboxlevel/".$phonenumber,
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
		if ($json["level"] !==  3) {
		    header("Location: ../level-".$json["level"]);
		}
	}
}
else {
 	header("Location: ../../hack");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hackbox v2 | Level 3</title>
  <!-- Global site tag (gtag.js) - Google Analytics X-Feedback-ID-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-125937952-1');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.6.5/tailwind.min.css'>
    <link rel="stylesheet" href="css/style.css?hover=<?php echo rand(111,999)?>">

  
</head>

<body>
  <img id="logo" src="../../whhc.png"></div>
  <img id="text" src="../../logov2.png"></div>
  <div class="container">
  <span class="txt anim-text-flow">Get the right number under 5000</span>
  <br />
  <center>
  
</div>
</center>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js?hover=<?php echo rand(111,999)?>"></script>

</body>

</html>

