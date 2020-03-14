<?php
session_start();
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
   $name = $_SESSION['name'];
   $phonenumber = $_SESSION['phonenumber'];
   $college = $_SESSION['college'];
}
else {
	header("Location: ../");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Hack It Up Sneak Peek | My Terminal</title>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125937952-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125937952-1');
</script>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">
</head>

<body>

      <input type="checkbox" id="menu-toggle"/>
      <label id="trigger" for="menu-toggle"></label>
      <label id="burger" for="menu-toggle"></label>
      <ul id="menu">
          <li><a href="../../">Home</a></li>
          <li><a href="../../leaderboard">Leaderboards</a></li>
          <li><a href="../../timeline">Timeline</a></li>
          <li><a href="../../faq">FAQ</a></li>
          <li><a href="../../res">Resources</a></li>
      </ul>

  <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:200' rel='stylesheet' type='text/css'>
<div class="container">
		<div class="window">
				<div class="handle">
						<div class="buttons">
								<button class="close">
								</button>
								<button class="minimize">
								</button>
								<button class="maximize">
								</button>
						</div>
						<span class="title"></span>
				</div>
				<div class="terminal"></div>
		</div>
</div>
<script>
   <?php echo "var name = '" .$name . "'"; ?>
</script>
<script>
   <?php echo "var college = '" .$college . "'"; ?>
</script>
<script>
   <?php echo "var phonenumber = '" .$phonenumber . "'"; ?>
</script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js?v=<?=time();?>"></script>

</body>

</html>
