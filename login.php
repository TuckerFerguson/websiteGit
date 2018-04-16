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
				</table>		
			</div>
	</div>
	<div class="logbox">
			<form action="success.php" method="post">
			<label for="name">Enter your name:</label>
			<input type="text" id="name" placeholder="Please enter name" name="name"/><br>
			<label for="pass">Enter your password:</label>
			<input type="password" id="pass" placeholder="Safe and Secure" name="pass"/><br>
			<input type="submit">
			<img src="logo.gif">
		</form>
		<a href="index.html">Back to Main Page</a><hr>			
				<a href="forum.php">Continue to Forums</a>
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


