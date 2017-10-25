<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$servernamedb="localhost";
$usernamedb="denis";
$passworddb="johnydepp0";
$dbname="mydb";

$userpassword=trim(password_hash($_POST['password'],PASSWORD_DEFAULT));
$userusername=$_POST['username'];
$accesslevel=$_POST['accesslevel'];

$conn1=mysqli_connect($servernamedb,$usernamedb,$passworddb);
if(!$conn1)
	die("connection error ".mysqli_error($conn1));
$sql1="CREATE DATABASE $userusername";
if(!mysqli_query($conn1,$sql1))
   echo "error creating user database".mysqli_error($conn1);

mysqli_close($conn1);
if(!$conn1)
	die("error in terminating initial connection ").mysqli_error($conn1);

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	die("connection error ".mysqli_error($conn));
$sql="INSERT INTO usernamelist(username,password,accesslevel) VALUES ('$userusername','$userpassword','$accesslevel')";
if(mysqli_query($conn,$sql))
{
	echo "username successfully created";
	mysqli_close($conn);
	$dbname="messages";
	$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
	if(!$conn)
		echo "error in creating message directory".mysqli_error($conn);
	$sql2="CREATE TABLE $userusername(
	id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	sendername VARCHAR(32),
	message VARCHAR(255),
	date VARCHAR(32),
	deliverycheck INT(6)
	)";
	if(!mysqli_query($conn,$sql2))
		die("errro in creating repository for messages").mysqli_error($conn);
   
}
 else
  echo "error creating user".mysqli_error($conn);
}
else
	header("location:intranethome.html");

























?>