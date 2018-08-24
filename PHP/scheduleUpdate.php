<?php

function team_name($teamID){
		if($teamID=='kkr') {return "Kolkata Knight Riders";}
		elseif($teamID=='mi') {return "Mumbai Indians";}
		elseif($teamID=='csk') {return "Chennai Super Kings";}
		elseif($teamID=='rcb') {return "Royal Challengers Banglore";}
		elseif($teamID=='srh') {return "Sunrisers Hydrabad";}
		elseif($teamID=='rr') {return "Rajasthan Royals";}
		elseif($teamID=='kxip') {return "Kings XI Punjab";}
		elseif ($teamID=='dd') {return "Delhi Daredvils";}
	}

$conn=new mysqli('localhost','root','root','BCC');
if($_POST){
if($_POST['check']=='add')
{
	$matchNo=$_POST['matchNo'];
	$team1ID=$_POST['team1ID'];
	$team1Name=team_name($team1ID);
	$team2ID=$_POST['team2ID'];
	$team2Name=team_name($team2ID);
	$groupName=$_POST['groupName'];
	$matchDay=$_POST['matchDay'];
	$matchTime=$_POST['matchTime'];
	$matchDate=$_POST['matchDate'];

	if(!empty($matchNo) && !empty($team1ID) && !empty($team2ID) && !empty($groupName) && !empty($matchDate) && !empty($matchTime) && !empty($matchDay)){

		$sql="INSERT INTO schedule2018 VALUES('$matchNo','$team1ID','$team1Name','$team2ID','$team2Name','$groupName','$matchDay','$matchDate','$matchTime')";

		if($conn->query($sql)){
			echo "<span>Schedule Successfully Updated </span>";
		}else{
			echo "<span>Somthing Went Wrong!</span>";
		}

	}
}


elseif($_POST['check']=='remove')
{

$matchNo=$_POST['matchNo'];
if(!empty($matchNo)){

	$sql="DELETE FROM schedule2018 WHERE matchID='$matchNo'";
	if($conn->query($sql)){
			echo "<span>Schedule Successfully Updated </span>";
		}else{
			echo "<span>Somthing Went Wrong!</span>";
		}
}
}

elseif($_POST['submit']=='update')
{

}}
else{
	Header('Refresh:0 url=../login.html');
}

?>