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
	}
	else {
		$json = json_decode($response, true);
		if ($json["level"] !== 9) {
		    //header("Location: ../level-".$json["level"]);
			header("Location: ../thankyou");
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
  <title>Hack It Up v2 | Level 9</title>
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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/0.6.5/tailwind.min.css'>
    <link rel="stylesheet" href="css/style.css?hover=<?php echo rand(111,999)?>">

  
</head>

<body>
  <img id="logo" src="../../whhc.png"></div>
  <img id="text" src="../../logov2.png"></div>
  <div class="container">
  <span class="txt anim-text-flow">The network security engineer Dhanya, hired an Intern who coded this login page</span>
  <br />
  <span class="txt anim-text-flow">He doesn't know DBMS and hence decided to query the data using a .txt file</span>
  <br/>
  <span class="txt anim-text-flow">Being a smart intern, he hid that text file from appearing into any search engine results</span>
  <br>
  <center>
  <div class="font-sans">
      <div class="w-xs bg-white p-6 shadow-md rounded max-w-sm">
            <form method="post" action="checklogin.php">
                <div class="mb-4">
                    <div><label class="block text-grey-darker text-sm font-bold mb-2 required" for="_username">Username</label><input type="text" id="_username" name="_username" required="required" placeholder="Username" autofocus="autofocus" class="border-2 rounded w-full p-2 text-grey-darker leading-tight focus:border-grey-dark" /></div>
                </div>
                <div class="mb-4">
                    <div><label class="block text-grey-darker text-sm font-bold mb-2 required" for="_password">Password</label><input type="password" id="_password" name="_password" required="required" placeholder="Password" class="border-2 rounded w-full p-2 text-grey-darker leading-tight focus:border-grey-dark" /></div>
                </div>
                <button class="bg-green-dark p-3 text-white font-bold rounded w-full hover:bg-green focus:outline-none focus:shadow-outline active:bg-green-dark">Login</button>
            </form>
        </div>
</div>
</center>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>

</html>

