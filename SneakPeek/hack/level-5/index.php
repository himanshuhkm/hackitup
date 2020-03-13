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
// 	header("Location: ../../hack");
//   exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hack It Up v2 | Level 5</title>
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
  <img id="text" src="../../logov2.png"></div>
    
   
  <div class="container">
      <div class="tryThis">https://passwordsgenerator.net/md5-hash-generator </div>
  	<span class="txt anim-text-flow"><?echo 'F86CB168C450304786D953874AC07751';?></span>
	<br />
	<span class="here"></span>
  <script >
      function verify() {
        checkpass = document.getElementById("pass").value;
        split = 4;
        if (checkpass.substring(0, split) == 'pico') {
          if (checkpass.substring(split*6, split*7) == 'b956') {
            if (checkpass.substring(split, split*2) == 'CTF{') {
             if (checkpass.substring(split*4, split*5) == 'ts_p') {
              if (checkpass.substring(split*3, split*4) == 'lien') {
                if (checkpass.substring(split*5, split*6) == 'lz_e') {
                  if (checkpass.substring(split*2, split*3) == 'no_c') {
                    if (checkpass.substring(split*7, split*8) == 'b}') {
                      alert("Password Verified")
                      }
                    }
                  }
          
                }
              }
            }
          }
        }
        else {
          alert("Incorrect password");
        }
        
      }
    </script>
    
    <form action="index.html" method="post">
    <input type="password" id="pass" size="8" />
    <br/>
    <input type="submit" value="verify" onclick="verify(); return false;" />
    </form>
    </div>
    </div>
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