<?php
$servername="localhost";
$username="username";
$password="johnydepp0";
$dbname="table1";
//create connection//
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check if successfully connected//
if(!$conn)
	echo "error in connection".mysqli_error($conn);
else
	echo "connected succcessfully to database $dbname";
echo "<br>";
//creating a table//
$sql="CREATE TABLE FROM $dbname ugoko(
id INT(6) PRIMARY KEY,
firstname VARCHAR(30),
lastname VARCHAR(30),
)";
mysqli_select_db($conn,$dbname);
//check whether the table is created or not//
if(mysqli_query($conn,$dbname))
	echo "table created successfully";
else
	die ("error in creating table".mysqli_error($conn));





?>