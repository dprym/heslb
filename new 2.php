<html>
<head>
</head>
<body>
<h1>trying out the function</h1>
<?php
$x=2;
$y=5;
echo $x+$y;
echo "<br>";
$cars=array("bmw","voxy","toyota","benz");
$arrlength=count($cars);
for($a=0;$a<$arrlength;$a++)
{
	echo $cars[$a];
	echo "<br>";
}
$tailor=array("waist"=>"slim","chest"=>"large","shoulder"=>"perfect");
print_r(array_values($tailor));
echo "<br>";
echo var_dump($tailor);
echo "<br>";
echo var_dump($cars);
echo "<br>";
echo "$tailor[waist]";
echo "<br>";
foreach($tailor as $values)
{
echo $values;
echo "<br>";
}
foreach($tailor as $n=>$values)
{
echo "key=$n"," ","value=$values";
echo "<br>";
}
$magari=array(
array("maybach",56,67),
array("kirikuu",23,76),
array("bugati",34,43),
);
$len=count($magari);
$r=1;
for($row=0;$row<$len;$row++){
echo "<p>","The row number is"," ",$row+$r,"</p>";
echo "<ul>";
for($col=0;$col<$len;$col++)
{
 echo "<li>".$magari[$row][$col]."</li>";
 echo "<br>";
}
echo "</ul>";
?>
</body>
</html>