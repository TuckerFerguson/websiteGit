<?php
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $user = "b8640f06d7d235";
        $pass = "ccb83ca0";
        $db = "heroku_7a7e7d2a0823f6a";
        try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO forum (title, post, date)
    VALUES ('$_POST[forumpost]', '$_POST[forumP]', now())";
    $conn->exec($sql);
  }
catch(PDOException $e)
  {
  echo $sql . "<br>" . $e->getMessage();
  }
  $callurl = curl_init();

curl_setopt($callurl , CURLOPT_URL, "https://sleepy-spire-34324.herokuapp.com/forumpost.php");
curl_setopt($callurl , CURLOPT_HEADER, 0);
curl_exec($callurl);
curl_close($callurl);
$conn = null;
?>