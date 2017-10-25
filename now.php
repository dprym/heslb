<?php
$servername="localhost:8080";
$username="username";
$password="password";
$dbname="mydb";
// create connection//
$conn=mysqli_connect($servername,$username,$password,$mydb);
//check connection//
if(!$conn)
	die("connection failed:".mysqli_connect_error());
else
	echo "connected successfully"

$sql="CREATE TABLE Myguests(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if(mysqli_query($conn,$sql))
echo "table myguests created successfully";
else
	echo "error creating table".mysqli_error($conn);
mysqli_close($conn);

?>