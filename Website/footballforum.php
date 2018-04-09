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
			</table>		</div>	
		</div>
	<div class="leftforum">
			<table style="width:100%">
				<tr>
					<td>
						<img src="basketball.gif" alt="Basketball">	
						<a href="basketballforum.php">Forum Post about Basketball</a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="football.gif" alt="Football">
						<a href="footballforum.php">Forum Post about Football</a>
					</td>
				</tr>
				<tr>
					<td><img src="soccer.gif" alt="Soccer">
					<a href="soccerforum.php">Forum Post about Soccer</a>
				</td>
				</tr>
				<tr>
					<td><img src="baseball.gif" alt="Baseball">
					<a href="baseballforum.php">Forum Post about Baseball</a></td>
				</tr>
				</table>
	</div>
	<div class="forumnews2">
	<table style="width:100%">
				<tr>
				<td><img src="logo.png" alt="SportEmpire Logo">
					<h1>Forum Posts about Football</h1><hr>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident velit in
						minima possimus cumque perspiciatis molestias assumenda doloremque nobis laudantium at nam, 
					quod architecto quaerat quibusdam laborum vitae. Veritatis, voluptas.'
					minima possimus cumque perspiciatis molestias assumenda doloremque nobis laudantium at nam,
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident velit in
					quod architecto quaerat quibusdam laborum vitae. Veritatis, voluptas.'
					minima possimus cumque perspiciatis molestias assumenda doloremque nobis laudantium at nam,
				</p>
					<h3>Posted: 3/17/2017 10:15 AM</h3>
					<hr>
				</td></tr>
				</table>
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
  			 }else{
    		 echo "<a href='login.php'> Not Logged In </a>";
   			}
   			?>
  		 	<p>Copyright © 2018 SportsEmpire</p>
		</div>
	</div>
</body>
</html>
