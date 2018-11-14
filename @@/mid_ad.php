<?php  
$MOD="mid_ad.php";
include "LM.php";
include "log.php";
?>

 <?php  // include("mid_fej.php"); ?>
 <?php  // include("mid_dat.php"); ?>



<?php  
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }




//$query = "INSERT INTO alert SET user_name='".$_GET['lgn']."', name='".$_GET['name']."', query='if(".$_GET['query'].")', description='".$_GET['description']."', phone='".$_GET['phone']."', text='".$_GET['text']."', station_id=".$_GET['dd'].", last_alert=0;"
$query = "INSERT INTO alert SET user_name='".$_GET['lgn']."', name='".$_GET['name']."', query='if(".$_GET['query'].")', description='".$_GET['description']."', phone='".$_GET['phone']."', text='".$_GET['text']."', station_id=".$_GET['dd'].", last_alert=0;";
$res = mysqli_query($sql_connect,$query);
//print("[$res], [$query]");

mysqli_close ($sql_connect);

//header("Location: index.php?cmd=5&dd=$station");
	header("Location: $INDEX.'&cmd=5#tocI'");

?>
