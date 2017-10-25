<?php
$ps='johnydepp';
$hashed_password=password_hash($ps,PASSWORD_DEFAULT);
VAR_DUMP($hashed_password);
if(password_verify($ps,$hashed_password))
	echo $hashed_password;
else
	echo 'there is an error';


?>