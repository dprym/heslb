<?php
session_start();

$servernamedb="localhost";
$usernamedb="denis";
$passworddb="johnydepp0";
$dbname="mydb";

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	DIE("connection error ".mysqli_error($conn));

$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES['filetoupload']['name']);
$uploadquota=1;

$imageextension=pathinfo($target_file,PATHINFO_EXTENSION);
//CHECK IF THE FILE is a real image or not//
$check=getimagesize($_FILES['filetoupload']['tmp_name']);
if(!$check)
{ 
   echo "not a real image"."<br>";
   $uploadquota=0;
}
//limit file size up to 5MB//
if($_FILES['filetoupload']['size']>5000000)
{
	echo "file too large,size should not exceed 5MB";
	$uploadquota=0;
}
//limit image types to JPG,PNG,JPEG,GIF//

if($imageextension!='jpg' &&
   $imageextension!='jpeg' &&
   $imageextension!='png' &&
   $imageextension!='gif'
)
{
	ECHO "only JPG,PNG,JPEG and GIF are allowed"."<br>";
	$uploadquota=0;
}
//uploading the file//
if($uploadquota==0)
	echo "sorry your file was not uploaded";
else
{
	if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file))
	{
		echo "your file was uploaded successfully"."<br>";
		$sql="UPDATE usernamelist SET profilepictures='$target_file' WHERE username='".$_SESSION['username']."'";
		if(mysqli_query($conn,$sql))
		{
			$_SESSION['profilepicture']="$target_file";
		header("location:intranethome.html");
		}
	else
		echo "error in saving directory".mysqli_error($conn);
	}
	else
		echo "<br>"."sorry there is an erro in uploading your file"."<br>";
}




?>