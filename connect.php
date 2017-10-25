<?php
$servername="localhost";
$username="username";
$password="johnydepp0";

//create connection//
$conn=mysqli_connect($servername,$username,$password);
//check connection//
if(!$conn)
	die("connection error".mysqli_connect_error());
else
	echo "connected successfully";
echo "<br>";
//CREATE DATABASE//
$sql="CREATE DATABASE table10";
if(mysqli_query($conn,$sql))
	echo "database created successfully";
else
	echo "error creating database".mysqli_error($conn);
$dbname="table10";
echo "<br>";
//CREATE A TABLE//
$sql="CREATE TABLE table2(
id INT(6) PRIMARY KEY,
name VARCHARS(20) NOT NULL,
)";
mysqli_select_db($conn,$dbname);
//check if table created successfully//
if(mysqli_query($conn,$sql))
	echo "table newtable created successfully";
else
	echo "creating table error".mysqli_error($conn);
mysqli_close($conn);






?>