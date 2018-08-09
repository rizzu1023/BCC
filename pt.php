<?php $v=10; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>PointsTable</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/pt.css"/>
	</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href="test.html" title="logo">Logo</a>
				</li>
				<li>
					<a  href="index.php" title="home page">Home</a>
				</li>
				<li>
					<a href="#" title="live score">Live Score</a>
				</li>
				<li>
					<a href="#" title="schedule">Schedule</a>
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
					<a class="active" href="pt.php" title="photos">Points Table</a>
				</li>
				<li style="float: right">
					<a class="anker" href="login.html" title="loginform">Log in</a>
				</li>
			</ul>
		</nav>
	</header>

<div class="groupA"><h1>Group A</h1>

  <table class="table1">
<thead>
  <tr>
    <th></th>
    <th>Teams</th>
    <th>Match</th>
    <th>Won</th>
    <th>Lost</th>
    <th>Tied</th>
		<th>Pts</th>
    <th>NRR</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>Kolkata Knight Riders</td>
    <td><?php echo $v; ?></td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
		<td>6</td>
    <td>+0.966</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Mumbai Indians</td>
    <td>6</td>
    <td>1</td>
    <td>5</td>
    <td>0</td>
		<td>2</td>
    <td>-0.566</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Kings XI Punjab</td>
    <td>5</td>
    <td>3</td>
    <td>2</td>
    <td>0</td>
		<td>6</td>
    <td>+1.366</td>
  </tr>
	<tr>
    <td>4</td>
    <td>Royal Challangers Banglore</td>
    <td>6</td>
    <td>3</td>
    <td>3</td>
    <td>0</td>
		<td>6</td>
    <td>-2.566</td>
  </tr>
	<tr>
    <td>5</td>
    <td>Chennai Super Kings</td>
    <td>5</td>
    <td>2</td>
    <td>3</td>
    <td>0</td>
		<td>4</td>
    <td>-1.366</td>
  </tr>
	<tr>
    <td>6</td>
    <td>Sunrisers Hydrabad</td>
    <td>6</td>
    <td>1</td>
    <td>5</td>
    <td>0</td>
		<td>2</td>
    <td>-0.366</td>
  </tr>
</tbody>
</table>
</div>
<img src="image/bg.jpg">



<!-- <div class="groupB"><h1>Group B</h1>
</div> -->


</body>
</html>