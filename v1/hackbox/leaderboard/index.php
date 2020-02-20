<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://hackitup.herokuapp.com/hackerboxleaderboard/",
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
$ranking = 1;
$json = json_decode($response, true);
}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125937952-1');
</script>

  <title>Hack-It-Up! | Leaderboard</title>
  <link href='https://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

		<input type="checkbox" id="menu-toggle"/>
		<label id="trigger" for="menu-toggle"></label>
		<label id="burger" for="menu-toggle"></label>
		<ul id="menu">
			<li><a href="../">Home</a></li>
			<li><a href="../login">Login</a></li>
			<li><a href="../register">Register</a></li>
			<li><a href="#">Leaderboards</a></li>
			<li><a href="../guidelines">Guidelines</a></li>
			<li><a href="../faq">FAQ</a></li>
		</ul>
  

  <div class="container">
	<div class="leaderboard">
		<div class="leaderboard--header">
			<div class="leaderboard--item">
				<div class="leaderboard--item--cell leaderboard--item--cell__rank">
					<span>Rank</span>
				</div>
				<div class="leaderboard--item--cell leaderboard--item--cell__user">
					<span>Name</span>
				</div>
				<div class="leaderboard--item--cell leaderboard--item--cell__thirty">
					<span>College</span>
				</div>
				<div class="leaderboard--item--cell leaderboard--item--cell__alltime">
					<span>Level</span>
				</div>
			</div>
		</div>
		<div class="leaderboard--list">
		<?php
         		for ($x = 0; $x < sizeof($json); $x++) {
           	?>
           		<div class="leaderboard--item">
           			<div class="leaderboard--item--cell leaderboard--item--cell__rank">
					<?php echo $ranking; ?>
				</div>
				<div class="leaderboard--item--cell leaderboard--item--cell__user">
					<?php echo $json[$x]["name"]; ?>
				</div>
              			<div class="leaderboard--item--cell leaderboard--item--cell__thirty">
					<?php echo $json[$x]["college"]; ?>
				</div>
				<div class="leaderboard--item--cell leaderboard--item--cell__alltime">
					<?php echo $json[$x]["currentlevel"]; ?>
				</div>
           	<?php
             		$ranking = $ranking + 1;
           	?>
           	</div>
           	<?php
         		}
       		?>

		</div>
	</div>
</div>
  
  

</body>

</html>