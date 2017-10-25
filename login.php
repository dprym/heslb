<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username= $password="";
function test_input($data){
	$data=htmlspecialchars($data);
	$data=trim($data);
	$data=stripslashes($data);
	return $data;
}
	$username=test_input($_POST['username']);
	$password=test_input($_POST['password']);
	
	
	
	
}
/*
echo "$username";
echo "$password";
*/

$servernamedb="localhost";
$usernamedb="denis";
$passworddb="johnydepp0";
$dbname="mydb";

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	DIE("connection error ".mysqli_error($conn));
/*
else
	echo "connected successfully";
*/
$sql="SELECT * FROM usernamelist WHERE username='$username'";
$result=mysqli_query($conn,$sql);

	if($result){
		$return=mysqli_fetch_array($result);
		if(empty($return))
			include 'login1.html';
		else
		{   $return[1]=trim($return[1]);
        	$return[1]=substr($return[1],0,60);
			$password=trim($_POST['password']);
			if(password_verify($password,$return[1]))
			{
				$_SESSION["username"]="$username";
				$_SESSION["password"]="$password";
				$_SESSION["accesslevel"]="$return[2]";
				$_SESSION["profilepicture"]="$return[3]";
				header("location:intranethome.html");
			}
			else 
			include 'login2.html';	
			
		}
	}
	







?>