<?php


$servername="localhost";
$username="root";
$password="test";
$dbname="Registration";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die($conn->connect_error);
}
else{
	echo "connect successfull";
}

$user=$_POST['username'];
$pass=$_POST['pass'];

$sql="insert into form(username,pass) values('$user','$pass')";
// $conn->query($sql);

if($conn->query($sql)===True){
	echo "data is succesfully  inserted";
}
else{
	echo "failed";

$conn->close();
}
?>