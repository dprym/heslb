<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name= $email= $comment= $gender= $website=" ";
	function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
	}
	{$name=test_input($_POST['fname']);
	$email=test_input($_POST['email']);
	$comment=test_input($_POST['comment']);
	$gender=test_input($_POST['gender']);
	$website=test_input($_POST['website']);
	}

}
/*if(empty($data)){
	if($data==$name)
		echo "name cannot be blank".exit;
	else
echo "incomplete data";}
	else{
		echo $data."<br>";
		echo "<br>";

}
*/
include 'check1.html';
if(empty($name))
	die ("name cannot be blank");
else
	echo "name is ".$name."<br>";
if(empty($email))
	die ("email cannot be blank");
else
	echo "email is ".$email."<br>";
if(empty($gender))
	die("please provide your gender");
else
	echo $gender."<br>";
if(empty($website))
	echo "website is blank"."<br>";
else
	echo "website is ".$website."<br>";
if(empty($comment))
	echo "you did not place a comment"."<br>";
else
	echo "you commented: ".$comment."<br>";
	

	

?>
<html>
<head>
</head>
<body>
<p>are the credentials correct</p>
<button type="button" onclick="rudi(1)">yes</button>
<button type="button" onclick="rudi(0)">no</button>
<script>
function rudi(r){
if(r==0)
	weka="<a href='http://localhost:8080/submit.html' target='_blank'>click here</a>"
else
	weka="thank you"



 document.getElementById("pasi").innerHTML=weka;
}
</script>
<p id="pasi">waiting for your answer</p>
<button type="button" onclick="<a href='http://localhost:8080/submit.html'></a>">reset</button>

</body>
</html>