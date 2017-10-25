<?php
$servername="localhost";
$username="denis";
$password="johnydepp0";
$database="mydb";
//create connection with the database//
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
	die("couldnt connect").mysqli_error($conn);
/*create the name database
$sql="CREATE DATABASE mydb";
if(mysqli_query($conn,$sql))
	echo "successfully created database";
else
	echo "error in creating database mydb".mysqli_error($conn);
*/
//create table for the credentials//
$sqli="CREATE TABLE usernamelist(
username VARCHAR(32) PRIMARY KEY NOT NULL,
password VARCHAR(255) NOT NULL,
accesslevel INT(32),
profilepictures VARCHAR(255)
)";
if(mysqli_query($conn,$sqli))
	echo "successfully created the table";
else
	echo "error in creating table".mysqli_error($conn);
//adding the credentials//
$sqlo="INSERT INTO usernamelist(username,password,accesslevel)
 VALUES ('denis','".password_hash('johnydepp0',PASSWORD_DEFAULT)."','5')";
 if(mysqli_query($conn,$sqlo))
	 echo "successfully created user";
 else
	 echo "error in creating user".mysqli_error($conn);


































?>