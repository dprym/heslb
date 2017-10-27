<?php
echo "string replace function test"."<br>";
$string=$_POST['filerename'];
$string=str_replace("'","''",$string);
echo "$string";
$illegal="/[£*']/";
/*if(preg_match($illegal,$string))
{ $new_string="$string";
  echo $new_string;
}
else
	echo $string."not working";
*/


?>