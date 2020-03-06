<?php
session_start();
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])) {
   $name = $_SESSION['name'];
   $phonenumber = $_SESSION['phonenumber'];
   $college = $_SESSION['college'];
   $usertoken = $_GET['usertoken'];
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
    		"Cache-Control: no-cache",
    		"Postman-Token: b44a6a35-4d2d-4e86-b0f4-7ec8de6ae9f6"
  	),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

	if ($err) {
  		echo "cURL Error #:" . $err;
	} else {
  		if (json_decode($response, true)["level"] === 1) {
  			if ($usertoken === "ZCCyV1") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 2) {
  			if ($usertoken === "n9@p9@k") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 3) {
  			if ($usertoken === "tffQyV91") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 4) {
  			if ($usertoken === "xWyWDg") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 5) {
  			if ($usertoken === "B9dD7a") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}  else if (json_decode($response, true)["level"] === 6) {
  			if ($usertoken === "28/01/2019") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}  else if (json_decode($response, true)["level"] === 6) {
  			if ($usertoken === "AP0C6R") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 7) {
  			if ($usertoken === "VItMpz") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		} else if (json_decode($response, true)["level"] === 8) {
  			if ($usertoken === "fnZSV5") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 9) {
  			if ($usertoken === "pb65IB") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 10) {
  			if ($usertoken === "uLAPXO") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 11) {
  			if ($usertoken === "yV1pkG") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 12) {
  			if ($usertoken === "yIJcXG") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 13) {
  			if ($usertoken === "8xd0yg") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 14) {
  			if ($usertoken === "pectTx") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
  		else if (json_decode($response, true)["level"] === 15) {
  			if ($usertoken === "6osk5N") {
  				$curl = curl_init();
				curl_setopt_array($curl, array(
  					CURLOPT_URL => "http://hackitup.herokuapp.com/advance/",
  					CURLOPT_RETURNTRANSFER => true,
  					CURLOPT_ENCODING => "",
  					CURLOPT_MAXREDIRS => 10,
  					CURLOPT_TIMEOUT => 30,
  					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  					CURLOPT_CUSTOMREQUEST => "POST",
  					CURLOPT_POSTFIELDS => "phonenumber=".$phonenumber,
  					CURLOPT_HTTPHEADER => array(
    						"Cache-Control: no-cache",
    						"Content-Type: application/x-www-form-urlencoded",
    						"Postman-Token: 091b97f0-1173-44c2-87ff-79433860fb3f",
    						"x-access-token: SrmWhhc@2018"
  						),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);
				if ($err) {
  					echo "cURL Error #:" . $err;
				} else {
  					echo "ACCESS GRANTED!";
				}
  			}
  			else {
  				echo "ACCESS DENIED!";
  			}	
  		}
	}
}
else {
	header("Location: ../");
  	exit;
}

?>