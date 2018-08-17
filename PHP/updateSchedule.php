<?php

if($_POST){ 
?>

<!DOCTYPE html>
<html>
<head>
	<title>updateSchedule</title>
</head>
<body>
	<form action="updateSchedule.php" method="post">
		<select name="opt" required="required">
			<option value="add">Add Match</option>
			<option value="remove">Remove Match</option>
			<option value="update">Update Match</option>
		</select>
		<input type="submit" name="submit">
	</form>
<?php
if($_POST['opt']=='add'){
	?>
	<form action="scheduleUpdate.php" method="post">
		<input type="number" name="matchNo" placeholder="Match No." required="required">
		<select name=team1ID required="required">
			<option value="">Team1</option>	
			<option value="rr">Rajasthan Royals</option>	
			<option value="kxip">Kings XI Punjab</option>	
			<option value="dd">Delhi Daredvils</option>	
			<option value="csk">Chennai Super Kings</option>	
			<option value="srh">Sunrisers Hydrabad</option>	
			<option value="rcb">Royal Challengers Banglore</option>	
			<option value="mi">Mumbai Indians</option>	
			<option value="kkr">Kolkata Knight Riders</option>	
		</select>
		<select name=team2ID required="required">
			<option value="">Team2</option>	
			<option value="rr">Rajasthan Royals</option>	
			<option value="kxip">Kings XI Punjab</option>	
			<option value="dd">Delhi Daredvils</option>	
			<option value="csk">Chennai Super Kings</option>	
			<option value="srh">Sunrisers Hydrabad</option>	
			<option value="rcb">Royal Challengers Banglore</option>	
			<option value="mi">Mumbai Indians</option>	
			<option value="kkr">Kolkata Knight Riders</option>	
		</select>
		<select name=groupName required="required">
			<option value="">Group</option>
			<option value="GroupA">A</option>
			<option value="GroupB">B</option>
			</select>

		<input type="text" name="matchDate" placeholder="Date" required="required">
		<select name=matchDay required="required">
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
			<option value="Thursday">Thurday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
		</select>
		<input type="text" name="matchTime" placeholder="Time" required="required">
		<input type="hidden" name="check" value="add">
		<input type="submit" name="submit">

	</form>
<?php }elseif($_POST['opt']=='remove')
{
	?>
	<form action="scheduleUpdated.php">
		<input type="text" name="RemoveMatch" placeholder="Remove Match">
	</form>
<?php }elseif($_POST['opt']=='update'){
	?>
	<form action="scheduleUpdated.php">
		<input type="text" name="UpdateMatch" placeholder="Update Match">
	</form>
<?php }}else{
	Header('Refresh:0  url=../login.html');
}?>
</body>
</html>


