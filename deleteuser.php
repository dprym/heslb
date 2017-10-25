<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
$servernamedb="localhost";
$usernamedb="denis";
$passworddb="johnydepp0";
$dbname="mydb";

if($_SESSION['username']==$_POST['username'])
{
	die("you cannot delete yourself");
}
if($_POST['username']=="denis")
{
	die("sorry you do not have access to delete this user");
}

$userusername=$_POST['username'];

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	die("connection error ".mysqli_error($conn));
$sql="DELETE FROM usernamelist WHERE username='$userusername'";
if(mysqli_query($conn,$sql))
  echo "$userusername successfully deleted";
  
 else
  echo "error deleting $userusername".mysqli_error($conn);


?>