


<!-- TWO STEPS TO INSTALL CURRENT DIRECTORY:

  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the last code into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->

<HEAD>

<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Dan Worsham -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var myloc = window.location.href;
document.write("myloc: " + myloc +"<br>"); 


var locarray = myloc.split("/");
document.write("locarray: " + locarray +"<br>"); 

delete locarray[(locarray.length-1)];
delete locarray[(locarray.length-2)];
delete locarray[(locarray.length-3)];
document.write("locarray2: " + locarray +"<br>"); 
var arraytext = locarray.join("/");
document.write("arraytext: " + arraytext +"<br>"); 

var mydir="<?php echo $hE; ?>/TescoJPG/";
document.write("mydir: " + mydir +"<br>"); 

//window.location=mydir

//  End -->
</script>

<SCRIPT LANGUAGE="JavaScript">

// This example shows folder manipulation routines: it lists 
// the contents of the current folder. 
// Created with Antechinus® JavaScript Editor 
// Copyright© 2000-2006 C Point Pty Ltd 
//alert('xxxxxxxxx');
document.write("The contents of "+'nnn'); 
document.write("The contents of " + getCurrentFolder()); 
write("The contents of " + getCurrentFolder()); 

fileName = findFirstFile("*.*"); // Find the first file matching the filter 
while(fileName.length) 
{ 
	alert('xxxxxxxxx');
	alert(fileName); 
    document.write(fileName); 
    fileName = findNextFile();  // Find the next file matching the filter 
}

//  
</script>
</HEAD>

<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

<BODY>

<center>
<form>
<input type=button value="Show Current Directory Listing (Or Index.html Page)" onClick="window.location=mydir;">
</form>
</center>

<p><center>
<font face="arial, helvetica" size="-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>

<!-- Script Size:  0.90 KB -->



<img src="hr/cesting-logo.gif" >
<?php  

//define the path as relative
$path =  "/var/www/html/42es/TescoJPG/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

//echo "Directory Listing of $path<br/>";
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
for ($k=$n-9;$k<$n;$k++)
   {
if($fileList[$k][3]=='5'){
	echo	$fileList[$k]."<br/>";
	?>	 <img src="<?php echo $hE; ?>/TescoJPG/<?php  echo $fileList[$k]?>" > <?php  
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


<?php  
//Uploads and stores a file in a database.
function db_upload_file($input_name, $database_name, $table_name, $file_bytes_col, $file_name_col)
         {
         //$input_name is the name of the input tag used to upload the file.
         global $HTTP_POST_FILES;

         if(isset($HTTP_POST_FILES) && is_uploaded_file($HTTP_POST_FILES[$input_name]["tmp_name"]))
           {
           $file_handle = fopen($HTTP_POST_FILES[$input_name]["tmp_name"], "rb");
           $file_name = $HTTP_POST_FILES[$input_name]["name"];
           $file_bytes = addslashes(fread($file_handle, filesize($HTTP_POST_FILES[$input_name]["tmp_name"])));
           unlink($HTTP_POST_FILES[$input_name]["tmp_name"]);

           mysqli_select_db($database_name);

           //Keeps the file names unique.
           $select = "select " . $file_name_col . " from " . $table_name .
                     " where " . $file_name_col . " = '" . $file_name . "'";
           $record_of_stored_files = mysqli_query($sql_connect,$select);

           if(mysqli_num_rows($record_of_stored_files) == 0)
             {
             $insert = "insert into " . $table_name .
                       "(" . $file_bytes_col . ", " . $file_name_col . ") values " .
                       "('" . $file_bytes . "', '" . $file_name . "')";

             mysqli_query($sql_connect,$insert);
             }
           else
             {
             $update = "update " . $table_name .
                       " set " .  $file_bytes_col . " = '" . $file_bytes . "' " .
                       " where " . $file_name_col . " = '" . $file_name . "'";

             mysqli_query($sql_connect,$update);
             }
           }
         }

//Makes a stored file available for download.
function db_download_file($file_name, $database_name, $table_name, $file_bytes_col, $file_name_col)
         {
         $return_value = "";

         mysqli_select_db($database_name);

         $select = "select " . $file_bytes_col . " from " . $table_name .
                   " where " . $file_name_col . " = '" . $file_name . "'";

         $file_records = mysqli_query($sql_connect,$select);

         if($file_record = mysqli_fetch_array($file_records))
           {
           $file_handle = fopen("./" . $file_name, "wb");
           $file_bytes = $file_record[0];
           fwrite($file_handle, $file_bytes, strlen($file_bytes));
           $return_value = "./" . $file_name;
           }

         return($return_value);
	 }
echo "mmmmmmmmmmmmm<br>";
?>


<?php  
//echo "kkkkk";
echo $host = "<?php echo $hE; ?>";
echo $user = "remeli_a";
echo $password = "thk";

echo $ftp_connection = ftp_connect($host);

//@ftp_login($ftp_connection, $user, $password);
echo "cccc<br>";
echo $path = $HTTP_GET_VARS["path"];

$parent = substr($path, 0, strrpos($path, "/"));
echo "kkkkk";
echo $file_list = ftp_nlist($ftp_connection, $path);
?>


<?php   if($path != "") { ?>
<a href="<?php  = $_SERVER["PHP_SELF"] ?>?path=<?php  = $parent ?>">..</a>
<br />
<?php   } ?>

<?php   for($index = 0; $index < sizeof($file_list); $index++) { ?>

   <?php  
   $file_size = ftp_size($ftp_connection, $file_list[$index]);

   //Format the file name so that it doesn't include the full path.
   if($path == "")
      $file_name = $file_list[$index];
   else
      $file_name = substr($file_list[$index], strrpos($file_list[$index], "/") + 1,
                          strlen($file_list[$index]) -  strrpos($file_list[$index], "/"));
   ?>

   <?php   //Find out if it's a file or a directory. ?>
   <?php   if($file_size == -1) { ?>
   <a href="<?php  = $_SERVER["PHP_SELF"] ?>?path=<?php  = $file_list[$index] ?>"><?php   } ?>
   <?php  = $file_name ?><?php   if($file_size == -1) { ?></a><?php   } ?>
   <br />

<?php   } ?>

<?php  
ftp_close($ftp_connection);
?>

