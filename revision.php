<?php
echo "revision of arrays";
echo "<br>";
$cars=array("volvo","benz","mercedes","bmw");
for($a=0;$a<4;$a++){
	echo $cars[$a];
echo "<br>";}
$magari=array("aina"=>"bmw","muuzaji"=>"bforwdjp","lilikotoka"=>"japan");
foreach($magari as $values){
	echo $values;
	echo "<br>";
}
print_r(array_values($magari));
echo "<br>";
foreach($magari as $key=>$values){
	echo $key,"-",$values;
	echo "<br>";
}
$ofisi=array(
array("tatu","nne","tano","saba"),
array("jumanne","jumatano","alhamis"),
array("monday","tuesday","wendesday"),
);
print_r(array_values($ofisi));
echo "<br>";
$len=count($ofisi);
for($i=0;$i<$len;$i++){
	for($j=0;$j<$len;$j++){
		echo $ofisi[$i][$j];
	echo "<br>";
	}
}
$kazin=array(
array("three"=>"tatu","four"=>"nne","five"=>"tano","seven"=>"saba"),
array("worst"=>"jumanne","miday"=>"jumatano","almost"=>"alhamis"),
array("jumatatu"=>"monday","jumanne"=>"tuesday","jumatoni"=>"wendesday"),
);
foreach($kazin as $key=>$values){
	echo $key,"-",$values;
	echo "<br>";
}








?>