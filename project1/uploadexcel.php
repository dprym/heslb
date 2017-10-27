<?php
set_time_limit(0);
$servernamedb="localhost";
$usernamedb="username";
$passworddb="johnydepp0";
$dbname="exceluploads";

$conn=mysqli_connect($servernamedb,$usernamedb,$passworddb,$dbname);
if(!$conn)
	DIE("connection error ".mysqli_error($conn));
if(isset($_POST['submit']))
{

$target_dir="excellupload/";
$target_file=$target_dir.basename($_FILES['excelltoupload']['name']);
$fileextension=pathinfo($target_file,PATHINFO_EXTENSION);
$uploadquota=1;
$excelname=$_POST['filerename'];
//limit file size//
if($_FILES['excelltoupload']['size']>=10000000)
{
	$uploadquota=0;
	die("file size too large");
}

/*limit file extension
if($fileextension!='xlsx' &&
$fileextension!='xls' &&
$fileextension!='xlm' &&
$fileextension!='ooxml' &&
$fileextension!='xlsm' &&
$fileextension!='xltx' &&
$fileextension!='xltm' &&
$fileextension!='xlsb' &&
$fileextension!='xla' &&
$fileextension!='xlam' &&
$fileextension!='xll' &&
$fileextension!='xlw')
*/
if($fileextension!='csv')
{
	echo "invalid file extension,please choose an csv file format"."<br>";
	$uploadquota=0;
}



if(file_exists($target_file))
{
	die("sorry,file already exists");
	$uploadquota=0;
}
/*else
	$sql="CREATE TABLE $excelname(
id INT(32) NOT NULL PRIMARY KEY AUTO_INCREMENT)";
	
if(!mysqli_query($conn,$sql)){
            echo "eRROR CREATING TABLE FOR STORAGE file".mysqli_error($conn);
	        $uploadquota=0;
}
*/
if($uploadquota==0)
	die("sorry your file was not uploaded");
else
{
	if(move_uploaded_file($_FILES['excelltoupload']['tmp_name'],$target_file))
	{
		echo "your file was uploaded successfully"."<br>";
		/*$sql="INSERT INTO uploadedexcels(excelname) VALUES ('$target_file')";
		if(mysqli_query($conn,$sql))
            echo "successfully stored your file";
        else
	        "error in uploading file".mysqli_error($conn);
		*/
	}
	else
		echo "error in uploading file";
		
}
}
$row=1;
$d=1;
$id=1;
if($file=fopen("$target_file","r"))
{
/*	if($pre_file_opened=fgetcsv($file))
	{
		$len=count($pre_file_opened);
		for($c=0;$c<$len;$c++)
		{
			$sql2="ALTER TABLE $excelname ADD column$d VARCHAR (255)";
			if(!mysqli_query($conn,$sql2))
				die("error in creating column for storage").mysqli_error($conn);
			$d++;
			
		}
		

	}
*/	
	while(!feof($file))
	{
		
		$file_opened=fgetcsv($file);
		$len=count($file_opened);
		
		for($a=0;$a<$len;$a++){
		if($file_opened[$a]=str_replace("'","''",$file_opened[$a]))
		{
			$file_opened[$a];
		}
		}
		$sqlo="INSERT INTO applicants(indexnumber,name,boxfile,author) VALUES('$file_opened[0]','$file_opened[1]','$file_opened[2]','$file_opened[3]')";
				if(!mysqli_query($conn,$sqlo))
                    echo "error in storing file at $row line ".mysqli_error($conn);

		
			echo "<p> line $row: <br></p>";
			$row++;
			$col=1;
			
			for($a=0;$a<$len;$a++)
			{
				echo $file_opened[$a]."/"."   ";
				/*$sqlo="INSERT INTO $excelname(column$col) VALUES('$file_opened[$a]')";
				if(!mysqli_query($conn,$sqlo))
                    die("error in storing file at $row line ").mysqli_error($conn);
				$col++;
                */
	              
			}
		
		
	}
}
else
	echo "error in opening file";


//code below and the { is for the html//
{
 ?>
  <form method="POST" action="excellupload.html">
  <input type="submit" value="return to home">
  </form>
<?php
}
	







?>