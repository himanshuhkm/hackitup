<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header("Location: ./");
    return;
}
else {
    session_start();
    header('Content-Type: application/json');
    $email = $_POST["email"];
    $password = $_POST["password"];
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://hackitup.herokuapp.com/hackbox-login",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "email=$email&password=$password",
      CURLOPT_HTTPHEADER => array(
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    http_response_code($httpcode);
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } 
    else {
        echo $response;
        $string = str_replace('\n', '', $response);
        $string = rtrim($string, ',');
        $string = "[" . trim($string) . "]";
        $json = json_decode($string, true);
        if ($httpcode == 200) {
            $_SESSION["loggedin"] = "true";
            $_SESSION["name"] = $json[0]["details"]["name"];
            $_SESSION["registration"] = $json[0]["details"]["registration"];
            $_SESSION["email"] = $json[0]["details"]["email"];
            $_SESSION["phonenumber"] = $json[0]["details"]["phonenumber"];
            $_SESSION["college"] = $json[0]["details"]["college"];
            exit;
        }
    }
}
?>