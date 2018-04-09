<?php
session_start();
session_destroy();
$callurl = curl_init();

curl_setopt($callurl , CURLOPT_URL, "https://sleepy-spire-34324.herokuapp.com/login.php");
curl_setopt($callurl , CURLOPT_HEADER, 0);
curl_exec($callurl);
curl_close($callurl);
$conn = null;
?>