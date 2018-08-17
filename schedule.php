<!DOCTYPE html>
<html>
	<head>
		<title>BCC</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/schedule.css"/>
		
	</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="#" title="logo">Logo</a>
				</li>
				<li>
					<a href="index.php" title="home page">Home</a>
				</li>
				<li>
					<a href="#" title="live score">Live Score</a>
				</li>
				<li>
					<a class="active" href="schedule.php" title="schedule">Schedule</a>
				</li>
				<li>
					<a href="teams.html" title="teams">Teams</a>
				</li>
				<li>
					<a href="#" title="stats">Stats</a>
				</li>
				<li>
					<a href="#" title="photos">Photos</a>
				</li>
				<li>
					<a href="pt.php" title="photos">Points Table</a>
				</li>
				<li style="float: right">
					<a class="anker" href="login.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>
<?php

$conn=new mysqli('localhost','root','root','BCC');

if($conn->connect_error){
    die($conn->connect_error);
}
else{ 
	echo "";
}

$sql="SELECT * FROM schedule2018 ORDER BY matchID ASC, dates ASC";
$result=$conn->query($sql);


if(true)
{
	
while($i=$result->fetch_assoc()){

?>
<ul class="ull">
	<li>
		<div class="matchCard">
			<h6 class="matchNo">Match <?php echo $i['matchID'].", ".$i['groupName']?></h6>
			<div class="match">
				<h1 id="team1"><?php echo $i['team1Name']?></h1>
				<h1 id="team2"><?php echo $i['team2Name']?></h1>
			<div class="vs">
				<div class="vs-text">Vs</div>
			</div>
			</div>
			<h6 class="date"><?php echo $i['days'].", ".$i['dates'].", ".$i['times']?></h6>
		</div>
	</li>
<?php }
}else{
	echo "<span>No Result Found</span>";
}
 ?>
	
</ul>	
	</body>
</html>
