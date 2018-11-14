
<?php   
$gimm=$gim;
$MOD="mid_GIS.php";
include "LM.php";
include "log.php";
$ido2=time();
//echo 'gimm'.$gimm.'get '.$_GET['gim'].'   gim  '.$gim;
?>

           <!-- BELSO TÁBLA LE-TOP KONTROLL: -->
            <table width="100%" border="0" cellspacing="0" cellpadding="3" >

              <!-- BELSO SOR: -->
              <tr align="center" valign="top">
 <td width="100%">


<IFRAME name="GIMS" src="GIMS.php<?php   echo $sess;?>&gim=<?php   echo $gimm;?>&ido2=<?php   echo $ido2;?>" width="100%" align="center" style="position:relative;  height:710px; width:1000px; top:3px; left:30px>   
                </td>
              </tr>  <!-- BELSO PÓTSOR vége -->
              
	    </table>     <!-- BELSO TÁBLA LE-TOP KONTROLL vége -->



