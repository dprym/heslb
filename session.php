<?php
session_start();
$username=$_SESSION["username"];
if(empty($_SESSION["username"]))
{
	header("location:login.html");
	die;
	
}
else
	echo "what ";


?>