<?php

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "http://hackitup.herokuapp.com/hackercount",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array(
    "Postman-Token: d4d7c42e-4aa2-4dd8-96b3-12d66d13be13",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $json = json_decode($response, true);
  $hackers = $json["count"];
}

?>

<html lang="en" >

	<head>
  		<meta charset="UTF-8">
  		<title>Hack It Up v2 | Total Hackers</title>
  		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  		<link rel="stylesheet" href="css/style.css?hover=<?php echo rand(111,999)?>">
  		<script>
		  	window.dataLayer = window.dataLayer || [];
		  	function gtag(){dataLayer.push(arguments);}
		  	gtag('js', new Date());
		  	gtag('config', 'UA-125937952-1');
		</script>
  	</head>

	<body>
		<div class="loader">
  			<span class="count"><?php echo $hackers;?></span>
		</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script  src="js/index.js?hover=<?php echo rand(111,999)?>"></script>
	</body>

</html>
