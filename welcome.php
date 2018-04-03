<html>
<head> 
<link rel="stylesheet" type="text/css" href="StyleSheet.CSS">
<title> SportsEmpire </title>
<link rel="icon" 
      type="image" 
      href="https://previews.123rf.com/images/martialred/martialred1601/martialred160100213/51673234-number-1-one-fan-hand-glove-with-finger-raised-flat-vector-icon.jpg">
</head>
<body>
<?php
 $nameErr = $emailErr = $passErr = $success = "";
 $name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $nameCheck = test_input($_POST["name"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$nameErr = "Only letters and white space allowed"; 
	  }
	}
    if (empty($_POST["pass"])) {
        $passErr = "password is required";
      } else {
        $passCheck = test_input($_POST["pass"]);
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      if (!empty($_POST["name"]) AND !empty($_POST["pass"]) AND !empty($_POST["email"])){
          $success = "Congratulations you are Registered";
      }
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }
    ?>
	<div class="TopBoxes">
			<table style="width:100%">
					<tr>
					<th>Basketball</th>
					<th>Baseball</th>
					<th>Football</th>
					<th>Soccer</th>
					<tr>
						<td><img src="basketlive.gif"></td>
						<td><img src="baselive.gif"></td>
						<td><img src="footlive.gif"></td>
						<td><img src="soccerlive.gif"></td>
			</table>		</div>
    </div>
    <div class="finishedbox">
<?php
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $user = "b8640f06d7d235";
        $pass = "ccb83ca0";
        $db = "heroku_7a7e7d2a0823f6a";
        try { 
            
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("INSERT INTO user (username, email, pass)
    VALUES ('$_POST[pass]','$_POST[name]','$_POST[email]')");
    $sql->execute();
    }
catch(PDOException $e)
    {
        echo $nameErr;
        echo "<br>" ;
        echo $passErr;
        echo "<br>";
        echo $emailErr;
        echo "<br>";
    }
$conn = null;
?>
<?php
    echo $success;
    echo $nameErr;
    echo "<br>" ;
    echo $passErr;
    echo "<br>";
    echo $emailErr;
    echo "<br>";?>
<img src="thumbs.gif" alt="Good Job!">
<hr>
<a href="forum.php">Continue to Forums</a>
<a href="index.html">Back to Main Page</a>
<a href="register.php">Go Back</a>
</div>
<div class="footer">
		<a href="login.php">  Login  </a>
		<a href="forum.php">  Forum  </a>
		<a href="index.html">  Main  </a>
		<a href="newslink.php">  News  </a>
		<a href="register.php">  Register  </a>
	</div>
</body>
</html>