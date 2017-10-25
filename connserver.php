<?php
$servername="localhost:8080";
$username="username";
$password="password";
// create connection//
$conn=new mysqli($servername,$username,$password);
//check connection//
if(!$conn->connect_error)
	die("connection failed:".mysqli_connect_error());
else
	echo "connected successfully";

?>