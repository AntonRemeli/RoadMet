<?php  

error_reporting(0);



 
//	$ido1 = 1291214760;
//	$ido1 = time()-86400*1.192/6;
	$ido1 = time()-30*86400/1;
 
//	$ido2 = 1228662240 ;
	$ido2 = $ido1+30*86400;
	$i=0;

for ($i=0;$i<50;$i++)
	{
		$Si=9531+$i;
//if($i>50)		$Si=8975+$i;
//		$Si=9169+$i;
		$Sit="S".$Si;
		echo "   \n       reading ".$Si." ";
       
		$stNo= $Si;
		$dd= $Si;
   	

include "mid_at_xp.php";

}


?>
