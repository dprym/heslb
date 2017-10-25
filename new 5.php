<?php
session_start();
if(empty($_SESSION["username"]))
{
	include "login.html";
	exit;
	}
	else
		echo ($_SESSION['username']);
?>