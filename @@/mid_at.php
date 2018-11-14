 


<?php   

$MOD="mid_at.php";
include "LM.php";
include "log.php";

include("mid_fej.php"); 
include("mid_dat.php"); 

?>

<?php   $add = $_GET['add']; 

include("mid_atf.php"); ?>
 
     <table>
<?php  $cal = $_GET['cal'];?>
 
  <IFRAME name="mid_at_xps_tab" src="<?php    if($cal==1) echo "mid_at_xps.php" ; else echo "mid_at_std.php"; ?><?php  echo $sess;?>" align="center" style="position:relative; width:770px; height:400px; top:3px; left:0px">   </IFRAME>

 </table>


