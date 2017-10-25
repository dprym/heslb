
<?php
$servername="localhost";
$username="denis";
$password="johnydepp0";
$dbname="messages";
//create a connection//
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connectionn//
if(!$conn)
	echo "failed to connect=".mysqli_error($conn);
else
	echo "connected successfully";
ECHO "<br>";
/*create a table
$sql="CREATE TABLE credentials(
id INT(6) PRIMARY KEY,
name VARCHAR(30)

//$sql($conn,$mydb);
if(mysqli_query($conn,$sql))
	echo "table credentials created successfully";
else
	echo "error creating table ".mysqli_error($conn);
//inserting values
$sql="INSERT INTO credentials(id,name)
VALUES('334455','husna')";
verify
if(mysqli_query($conn,$sql))
	ECHO "credentials successfully inserted";
else
	echo "error inserting values".mysqli_error($conn)

$sql="DELETE FROM credentials WHERE name='njeleka'";
if(mysqli_query($conn,$sql))
	ECHO "credentials successfully deleted";
else
	echo "error deleting values".mysqli_error($conn)
echo "<br>";

$sql="CREATE TABLE pathdirectory(
username VARCHAR(32) PRIMARY KEY NOT NULL,
profilepictures VARCHAR(255) NOT NULL

)";
if( mysqli_query($conn,$sql))
 echo "successfully created the directory";
else
	echo "error in creating the directory".mysqli_error($conn);


$sql="ALTER TABLE usernamelist ADD profilepictures VARCHAR(255)";




$sql="CREATE TABLE messages(
sender VARCHAR(32) NOT NULL,
message VARCHAR(255) NOT NULL,
date VARCHAR(255)

)";



echo Date("Y:M:D").DATE("h:i:sa");
$sql="CREATE DATABASE messages";
if( mysqli_query($conn,$sql))
 echo "successfully DELETED the directory";
else
	echo "error in DELETING the directory".mysqli_error($conn);
*/
$sql2="CREATE TABLE denis(
	id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	sendername VARCHAR(32),
	message VARCHAR(255),
	date VARCHAR(32),
	deliverycheck INT(6)
	)";
	if(!mysqli_query($conn,$sql2))
		die("errro in creating repository for messages").mysqli_error($conn);





























?>