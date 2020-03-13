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
		if ($json["level"] !== 5) {
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
  <title>Hack It Up Sneak Peek | Level 5</title>
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
  
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">

  
</head>

<body>
  <img id="logo" src="../../whhc.png"></div>
  <img id="text" src="../../logov.png"></div>
    
   
  <div class="container">
  	<span class="txt anim-text-flow">Login</span>
	<br />
	<span class="here"></span>
  <center>
  <div class="font-sans">
      <div class="w-xs bg-white p-6 shadow-md rounded max-w-sm">
            <form action="checkLogin.php" method="post">
                <div class="mb-4">
                    <div><label class="block text-grey-darker text-sm font-bold mb-2 required">Did you think you can login?</label><input type="text" name="term"  autofocus="autofocus" class="border-2 rounded w-full p-2 text-grey-darker leading-tight focus:border-grey-dark" /></div>
                </div>
                <button class="bg-green-dark p-3 text-white font-bold rounded w-full hover:bg-green focus:outline-none focus:shadow-outline active:bg-green-dark">Submit</button>
            </form>
        </div>
</div>
</center>
        <!-- if(checkpass.substring(0, split) == 'H') {
          if (checkpass.substring(split*6, split*7) == 'e') {
            if (checkpass.substring(split, split*2) == 'a') {
             if (checkpass.substring(split*4, split*5) == 'V') {
              if (checkpass.substring(split*3, split*4) == '1') {
                if (checkpass.substring(split*5, split*6) == 'I') {
                  if (checkpass.substring(split*2, split*3) == '2') {
                    if (checkpass.substring(split*7, split*8) == 'q') {
                      }
                    }
                  }
          
                }
              }
            }
          }
        } -->
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