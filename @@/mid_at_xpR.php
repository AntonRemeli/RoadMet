<?php  

error_reporting(0);



 
//	$ido1 = 1228543260;
//	$ido1 = time()-86400*1.192/6;
	$ido1 = time()-86400*1;
 
//	$ido2 = 1228662240 ;
	$ido2 = time()+600;
	$i=0;

for ($i=0;$i<550;$i++)
	{
		$Si=9026+$i;
//		$Si=9169+$i;
		$Sit="S".$Si;
		echo "   \n       reading ".$Si." ";
       
		$stNo= $Si;
		$dd= $Si;
		

include "mid_at_xp.php";

}


?>
