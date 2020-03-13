<?php
setcookie("JSESSIONID", "798480bjkbkjbcdw090WSiba");
$ip = $_SERVER['REMOTE_ADDR'];
$access_key = 'e4e8b9efdd988261006b8f6051ea80ef';

$text = "You are Tamash and you can see me only from Washington DC.";

// Initialize CURL:
$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

$coun = $api_result['country_name'];

    if(isset($_SERVER['HTTP_USER_AGENT'])){
         $agent = $_SERVER['HTTP_USER_AGENT'];
    }     
    if(strlen(strstr($agent,"Tamash")) > 0 ){
        $browser = 'safari';
    }
    
    if ($agent==="Tamash" && $coun==='United States') {
    $text = "Go to getStuff.php";
}

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
		if ($json["level"] !== 15) {
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
  <title>Hack It Up Sneak Peek | Level 15</title>
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

    <div class="container">
  	<span class="txt anim-text-flow"><?echo $text;?></span>

</div>
  
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">

  
</head>

<body>
  <img id="logo" src="../../whhc.png"></div>
  <img id="text" src="../../logov.png"></div>
  <div class="container">
  
  	<span class="txt anim-text-flow"><?echo '';?></span>


</div>

<style>
* {
  box-sizing: border-box;
}

.search {
  width: 100px;
  height: 100px;
  margin: 40px auto 0;
  background-color: #242628;
  position: relative;
  overflow: hidden;
  transition: all 0.5s ease;
}
.search:before {
  content: '';
  display: block;
  width: 3px;
  height: 100%;
  position: relative;
  background-color: #00FEDE;
  transition: all 0.5s ease;
}
.search.open {
width: 500px;
}
.search.open:before {
  height: 60px;
  margin: 20px 0 20px 30px;
  position: absolute;
}

.form-control {
  width: 100%;
  height: 100%;
  box-shadow: none;
  border: none;
  background: transparent;
  color: #fff;
  padding: 20px 100px 20px 45px;
  font-size: 40px;
}

.form-control:focus {
  outline: none;
}

.search-button {
  width: 100px;
  height: 100px;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
  padding: 20px;
  cursor: pointer;
}

.btn {
  background-color: #242628;
  width: 180px;
  font-size: 1em;
  transition: width 0.6s;
  -webkit-transition: width 0.6s;
  border: none;
  margin-top: 50px;
  height: 60px;
  border-radius: 3px;
  box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
  color: #888;
}

.btn:hover {
  background: #888;
  cursor: pointer;
  color: #242628;
  width: 220px;
}

.credentails{
    username:inject;
    password:inject;
}
br {
  color:#fff;
}

</style>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js?v=<?=time();?>"></script>

</body>

</html>