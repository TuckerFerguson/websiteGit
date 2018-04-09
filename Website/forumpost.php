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
					<a href="baseballforum.php">Forum Post about Baseball</a>
				</td>
				</tr>
				</table>
	</div>
	<div class="forumnews">
	<table style="width:100%">
				<tr>
				<td><img src="logo.png" alt="SportEmpire Logo">
                    <h1><a href="forumpost.php">Create Your Own Post</a></h1><hr>
                    <form action="Dao.php" method="post" id="usrform">
			    Title: <input type="text" placeholder="Enter Title. . ." name="forumpost"/><br>
            <input type="submit">
            <textarea rows="10" cols="54" name="forumP" form="usrform">Post will be shown below...</textarea>
        </td></tr>
    </table>
</form>
                <?php 
            $host = "us-cdbr-iron-east-05.cleardb.net";
            $user = "b8640f06d7d235";
            $pass = "ccb83ca0";
            $db = "heroku_7a7e7d2a0823f6a";
            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = $conn->prepare('SELECT title, post, date FROM forum');
            $query->execute();
            ?>
            <div>
            <table style="width:100%">
            <?php
            while ($row = $query->fetch(PDO::FETCH_ASSOC))
            {   
                $first = $row['title'];
                $second = $row['post'];
                $third = $row['date'];
                echo '<tr><td>';
                echo '<h1>';
                echo "$first";
                echo'</h1>';
                echo '<hr><h2>';
                echo "$second";
                echo '</h2><hr><h3>';
                echo "$third";
                echo '</h3>';
                echo '</tr></td>';
            }
            ?>
            </table>
        </div>
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
