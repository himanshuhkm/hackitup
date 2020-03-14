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
	}
	else {
		$json = json_decode($response, true);
		if ($json["level"] !== 20) {
			header("Location: ../".$json["level"]);
		}
		else{
			setcookie("imcookie", "false");
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
  <title>Hack It Up Sneak Peek | Level 20</title>
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
  <img id="logo" src="../../whhc.png"></div>
  <img id="text" src="../../logov.png"></div>
  <div class="container">
  
  	<span class="txt anim-text-flow"><?echo 'I M HUNGRY GIVE ME FOOD';?></span>
  	<!-- <span class="txt anim-text-flow"><?echo 'This particular level only works in Google Chrome';?></span>
  	<span class="txt anim-text-flow"><?echo 'No, they are not our sponsors! :P';?></span> -->
  	<form name="form" action="checklogin.php" method="post">
  		<div class="search">
			<input id="ad" placeholder="Enter username" type="text" class="form-control" id="_username" name="_username" required="required" />
			<span class="search-button">
		</div>
  		<div class="search">
			<input id="pa" placeholder="Enter password" type="password" class="form-control" id="_password" name="_password" required="required"/>
			<span class="search-button">
		</div>
		<span class="input-group-btn">
			<button id="search" class="btn btn-default" type="submit">GO</button>
		</span>
		<br />
	</form>
	<span class="here"><?php if ($_COOKIE['imcookie'] == "true") {echo "mddddd5(42d08fd889e511098137bbea2e450c0e) pas(echome)";} ?></span>
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

br {
  color:#fff;
}

</style>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js?v=<?=time();?>"></script>


</body>

</html>