<?php
$servernamedb="localhost";
$usernamedb="username";
$passworddb="johnydepp0";
$dbname="mydb";

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	die("connection error ".mysqli_error($conn));

else
	echo "connected successfully"."<br>";

//create a table with the username and password//
/*
$sql="CREATE TABLE usernamelist(
username VARCHAR(32) PRIMARY KEY NOT NULL,
password VARCHAR(255) NOT NULL
)";
if(mysqli_query($conn,$sql))
	echo "successfully created table";
else
	echo "error in creating table ".mysqli_error($conn);

$sql="INSERT INTO usernamelist(username,password) VALUES('denis','johnydepp0')";
if(mysqli_query($conn,$sql))
	echo "successfully created user access"."<br>";
else
	die("error creating user access ".mysqli_error($conn));

/*

$sql="DROP TABLE usernamelist";
if(mysqli_query($conn,$sql))
	echo "successfully deleted";
else
	die("error in deleteion ".mysqli_error($conn));


$hashed_password=trim(password_hash('johnydepp0',PASSWORD_DEFAULT));
$sql="UPDATE usernamelist SET password='$hashed_password' WHERE username='denis'";
IF(mysqli_query($conn,$sql))
	echo 'successfully updated';
else
	echo 'error in updating'.mysqli_error($conn);

$sql="ALTER TABLE usernamelist ADD accesslevel INT(6) NOT NULL";
if(mysqli_query($conn,$sql))
	echo "successfully added another column";
else
	echo "error adding another column".mysqli_error($conn);

$sql="UPDATE usernamelist SET accesslevel=4 WHERE username='jeremih'";
IF(mysqli_query($conn,$sql))
	echo 'successfully updated';
else
	echo 'error in updating'.mysqli_error($conn);
*/








?>