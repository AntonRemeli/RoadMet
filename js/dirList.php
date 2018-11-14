

<?php 

//define the path as relative
$path = "/drv0/html/TescoJPG/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//echo "Directory Listing of $path <img src='hr/cesting-logo.gif' ><br/>";
$n=0;
//running the while loop
while ($file = readdir($dir_handle)) 
{
	$n++;
	$fileList[$n]=$file;
//   echo $file."<br/>";
}

echo "Reverse Directory Listing of $path<br/>";
$dtst=0;
for ($k=$n;$dtst<9;$k--)
   {
	   if($fileList[$k][2]=='2'){
$dtst++;
	echo "<img src='http://195.56.65.42/TescoJPG/$fileList[$k]' > ".$dtst.": ".$fileList[$k]."<br/>";

$S9522List[$k]=$fileList[$k];
/*
$fd = fopen("/drv0/html/TescoJPG/".$fileList[$k], "r") or die("Can't openn the file");
$fd = fread($fd, filesize("/drv0/html/TescoJPG/".$fileList[$k])) or die("Can't read the file");
fclose($fd); 

$fe = fopen("/drv0/html/kamera/9205/pic".$dtst.".jpg", "w") or die("Can't open file");
//$fe = fopen("/drv0/html/kamera/9205/pic1.jpg", "w") or die("Can't open file");
fwrite($fe, $fd);
fclose($fe); 
 */
}
}        

//closing the directory
closedir($dir_handle);

/*
// get contents of a file into a string
$filename = "/drv0/html/de.png";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
 
echo $contents;
 */

?>

