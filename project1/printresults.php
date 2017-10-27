<?php
session_start();
$servernamedb="localhost";
$usernamedb="username";
$passworddb="johnydepp0";
$dbname="exceluploads";

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	DIE("connection error ".mysqli_error($conn));
$searchvalue=$_SESSION['searchvalue'];
$sql="SELECT * FROM applicants WHERE indexnumber='$searchvalue'";
$return=mysqli_query($conn,$sql);

//composer autoload//
require_once __DIR__ .'/vendor/autoload.php';
//create an instance of the class//
$mpdf=new\Mpdf\Mpdf();
ob_start();
$html='
<html>
<head>
<style>
 table,th,td{
             border:1px solid black;
			 border-collapse:collapse;
			 }
 
</style>
</head>
<body>
<--mpdf
<?php echo "search results for ".$searchvalue; 
if(empty($return)) echo "<br>"."no result found";  ?>
<table width="100%">
<th>S/N</th>
<th>INDEX NUMBER</th>
<th>NAME</th>
<th>BOXFILE</th>
<th>AUTHOR</th>
<?php

while($result=mysqli_fetch_array($return))
{
echo "<tr><td>".$result[0]."</td>";
echo "<td>".$result[1]."</td>";
echo "<td>".$result[2]."</td>";
echo "<td>".$result[3]."</td>";
echo "<td>".$result[4]."</td></tr>";

 }

?>
</table>
</p>
</div>
mpdf-->
</body>
</html>

';
$content= ob_get_contents();
//writing the html to the class//
$mpdf->WriteHtml($content);

//output the file//
$mpdf->Output();











?>