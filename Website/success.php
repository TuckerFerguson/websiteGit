<?php
session_start();
?>
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
 $nameErr = $passErr = $passCheck = $nameCheck = "";
 $name = $email = $pass = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "*Name is required";
    } else {
      $nameCheck = test_input($_POST["name"]);
	  if (!preg_match("/^[a-zA-Z ]*$/",$nameCheck)) {
		$nameErr = "*Only letters and white space allowed"; 
	  }
	}
    if (empty($_POST["pass"])) {
        $passErr = "*Password is required";
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
    <div class="logbox">
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Name: <input type="text" name="name" value="<?php echo $nameCheck;?>">
     <span class="error"> <?php echo $nameErr;?></span>
     <br>
 Pasword: <input type="text" name="pass" value="<?php echo $passCheck;?>">
<span class="error"> <?php echo $passErr;?></span>
<br>
       <input type="submit">
       <img src="logo.gif">
   <br>		
   </form>
<?php
        $salt = "123!";
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $user = "b8640f06d7d235";
        $pass = "ccb83ca0";
        $db = "heroku_7a7e7d2a0823f6a";
        $link = "register.php";
        $safePass = md5($passCheck . $salt);
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = $conn->prepare('select username, pass From user 
   WHERE userName = :nameCheck AND pass = :passCheck');
   $sql->bindParam(':nameCheck', $nameCheck, PDO::PARAM_STR, 12);
   $sql->bindParam(':passCheck', $safePass, PDO::PARAM_STR, 12);
   $sql->execute();
   $count = $sql->rowCount();
   if($count!=0){
     $_SESSION['logged'] = $nameCheck;
     echo "<h3>Login Successful</h3>";
     echo '<a href="logout.php">Logout</a>';
     echo "&nbsp"; 
   }else if(($passErr == "") AND ($nameErr == "")){
     echo "<h3>Incorrect Information</h3>";
   }
$conn = null;
?>
<a href="forum.php">Forums</a>
<a href="index.html">Back to Home</a>
</div>
<div class="footer">
		<a href="login.php">  Login  </a>
		<a href="forum.php">  Forum  </a>
		<a href="index.php">  Main  </a>
		<a href="newslink.php">  News  </a>
		<a href="register.php">  Register &nbsp </a>
   		<div class="copyright">
	  		<?php if(isset($_SESSION['logged'])){
			 echo "Logged in as: ";
       echo $_SESSION['logged'];
       echo '&nbsp';
       echo '<a href="logout.php">Logout</a>';
  			 }else{
    		 echo "<a href='login.php'> Not Logged In </a>";
   			}
   			?>
  		 	<p>Copyright © 2018 SportsEmpire</p>
		</div>
	</div>
</body>
</html>