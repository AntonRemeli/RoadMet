<?php  
$MOD="mid_al.php";
include "LM.php";
include "log.php";
?>

 <?php   include("mid_fej.php"); ?>
 <?php   include("mid_dat.php"); ?>



<?php  
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$station = $_GET['dd'];


if($cmd==555)        		
{	 
	if (isset($_GET['id']))
	{
		$delId=$_GET['id'];
		$usrId=$_GET['lg'];
		$query = "DELETE FROM alert WHERE id=$delId and station_id=$station and user_name='$usrId' and id>200 ";
		$res = mysqli_query($sql_connect,$query);
		$cmd=5;
	}
}

$query = "SELECT * FROM alert where station_id=$station  ";
$res = mysqli_query($sql_connect,$query);
$loop=0;
while($rows = mysqli_fetch_array($res, MYSQLI_ASSOC))
{
	$al_id[$loop]=$rows[id];
	$al_user[$loop]=$rows[user_name];
	$al_name[$loop]=$rows[name];
	$al_desc[$loop]=$rows[description];
	$al_phone[$loop]=$rows[phone];
	$al_text[$loop]=$rows[text];
	$loop++;	
}


mysqli_close ($sql_connect);
	

	if($cmd==5)        		
	{
?>			    

          		 <table width=100% cellspacing="1" cellpadding="5">
          		  <?php  
          		  	for ($loop=0;$loop<count($al_id);$loop++)
          		  	{
          		  		$loop_inx=$loop+1;
					print("<tr align=center bgcolor=#CBCAB6>
						<td class='midgreyBoldCopy'>$al_id[$loop]</td>
						<td class='midgreyBoldCopy'>$al_user[$loop]</td>
						<td class='midgreyBoldCopy'>$al_name[$loop]</td>
						<td class='midgreyBoldCopy'>$al_phone[$loop]</td>
						<td class='smallergrey' align=left>$al_desc[$loop]</td>
						<td class='midgreyBoldCopy'> <a href='$INDEX&cmd=555&dd=$station&id=$al_id[$loop]&lg=$lgn'>
						<img src=../kepek/x.gif border=0 alt='Törlés' title='Törlés'></a></td></tr>");
          		  	}
          		  ?>	  

         <tr>
         <td align=right><a href="<?php   echo $INDEX;?>&cmd=888"><img src="../kepek/button_long_<?php   echo $L;?>.gif" border="0"></a></td>
        </tr>
<?php  
	}  
//	if($cmd==888)       	include "alert.php";
?>        	
      </table>


      <?php  echo $BepillantásAlarm?>
<?php  
 include "mind_riaszt.php";
?>
