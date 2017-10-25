<?php
$servername="localhost";
$username="username";
$password="johnydepp0";
$dbname="mydb";
//create connection//
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check the connection//
if(!$conn)
echo "error connecting to database".mysqli_error($conn);
else
echo "successfull connected to database";



?>