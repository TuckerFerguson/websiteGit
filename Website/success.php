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
 $nameErr = $passErr ="";
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
    <div class="finishedbox2">
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Name: <input type="text" name="name" value="<?php echo $name;?>">
     <span class="error"> <?php echo $nameErr;?></span>
     <br>
 Pasword: <input type="text" name="pass" value="<?php echo $name;?>">
<span class="error"> <?php echo $passErr;?></span>
<br>
       <input type="submit">
       <img src="logo.gif">
   <br>		
   </form>
<?php
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $user = "b8640f06d7d235";
        $pass = "ccb83ca0";
        $db = "heroku_7a7e7d2a0823f6a";
        $link = "register.php";
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = $conn->prepare('select userName, pass From user 
   WHERE userName = :nameCheck AND pass = :passCheck');
   $sql->bindParam(':nameCheck', $nameCheck, PDO::PARAM_STR, 12);
   $sql->bindParam(':passCheck', $passCheck, PDO::PARAM_STR, 12);
   $sql->execute();
   $count = $sql->rowCount();
   if($count!=0){
     echo "<h1>Login Successful";
   }
   else{
     echo "<h1>Incorrect Infomration";
   }
$conn = null;
?>
<hr>
<a href="forum.php">Continue to Forums</a>
<a href="index.html">Back to Main Page</a>
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