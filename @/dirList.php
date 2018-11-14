

<?php  

//define the path as relative
$path =  "/var/www/html/42es/TescoJPG/";

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
for ($k=$n;$k>$n-9;$k--)
   {
if($fileList[$k][3]=='5'){
//	echo "<img src='<?php echo $hE; ?>/@/hr/cesting-logo.gif' > ".$fileList[$k]."<br/>";

//	echo "<img src='<?php echo $hE; ?>/TescoJPG/".$fileList[$k]." > ".$fileList[$k]."<br/>";
//	echo "<img src='<?php echo $hE; ?>/TescoJPG/9205_20090227130500.jpg' > ".$fileList[$k]."<br/>";
	echo "<img src='<?php echo $hE; ?>/TescoJPG/$fileList[$k]' > ".$fileList[$k]."<br/>";

$S9205List[$k]=$fileList[$k];
$dtst++;
$fd = fopen("<?php echo $hE; ?>/TescoJPG/".$fileList[$k], "r") or die("Can't openn the file");
$fd = fread($fd, filesize("<?php echo $hE; ?>/TescoJPG/".$fileList[$k])) or die("Can't read the file");
fclose($fd); 

$fe = fopen("<?php echo $hE; ?>/kamera/9205/pic".$dtst.".jpg", "w") or die("Can't open file");
//$fe = fopen("<?php echo $hE; ?>/kamera/9205/pic1.jpg", "w") or die("Can't open file");
fwrite($fe, $fd);
fclose($fe); 
}
}        

//closing the directory
closedir($dir_handle);

/*
// get contents of a file into a string
$filename = "<?php echo $hE; ?>/de.png";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);
 
echo $contents;
 */

?>

