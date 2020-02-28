<?php
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
		if ($json["level"] !== 9) {
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
  <title>HACK.IT.UP!</title>
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

  
</head>

<body>
  <img id="logo" src="../../login/whhc.png"></div>
<!-- <p></p> -->
  <img id="text" src="../../login/logo.png"></div>
  <div class="container">
  <span class="txt anim-text-flow">
MIIBOgIBAAJBAIB4wlumclpRAgzhspD3j1yQKIkIxGDy1k8w65LKrVkjF2JbJ8/F
a3ZWqhnj714d+QRna6DB/4/KLmzCNqgSFJMCAwEAAQJAZBy2aDEWn2bNEDi4q9se
bmUwEUkxrtLNSjy29lbWKsTfjibBGtYNYHAAVUyF7wxaTJtnjYbubpavQLND0mSV
UQIhAMjkHZICwclfLCpxujyfnPTnihZYyKUGCfT+FSEkiu9FAiEAo7biAaBs2WiT
aUN2gc/i/PMj3xYdcgzZINzu9/2TZfcCIQCI9TxTtx12tDPgG/jkK81OCizSX2Ur
XJqdNDwjhE5UIQIgQAKJa0lmRbr1p/qQo0C851nJdLgY2zbazlaTuLKUpxECIDb9
NRqngOwZ5ZCz8RN2ApIHwGzkp7Ob2nhXdLynX2Px</span>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>