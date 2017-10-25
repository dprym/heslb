<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Firstname= $Lastname= $product= $phonenumber= $NumberOfItems= $email=" ";

function test_input($data){
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripslashes($data);
	return $data;
}
{
	$Firstname=test_input($_POST['Firstname']);
	$Lastname=test_input($_POST['Lastname']);
	$product=test_input($_POST['product']);
	$phonenumber=test_input($_POST['Phonenumber']);
	$NumberOfItems=test_input($_POST['NumberOfItems']);
	$email=test_input($_POST['email']);
}
}

include 'UporotoCheckKuku.html';
echo "taarifa zako ulizoingiza ni:"."<br>";
echo "Jina: $Firstname $Lastname"."<br>";

echo "aina ya kuku: $product"."<br>";
echo "namba ya simu: $phonenumber"."<br>";
echo "kuku wangapi: $NumberOfItems"."<br>";
echo $email."<br>";

echo "je taarifa hizi ni za kweli?";
function myfunction(){
	document.getElementById
}


















?>