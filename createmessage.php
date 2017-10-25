<?php
session_start();

if(isset($_POST['submit']))
{
$receiver=$_POST['receiver'];
$message=$_POST['message'];
$date=date("D:M:Y").date("h:i:sa");
$sender=$_SESSION['username'];

$servernamedb="localhost";
$usernamedb="denis";
$passworddb="johnydepp0";
$dbname="messages";	


$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	die("connection error ").mysqli_error($conn);


$sql="INSERT INTO $receiver(sendername,message,date,deliverycheck) VALUES ('$sender','$message','$date','0')";
if(mysqli_query($conn,$sql))
  echo "message sent to $receiver"; 
 else
  echo "error sending message".mysqli_error($conn);
}
else
	header("location:intranethome.html");

?>