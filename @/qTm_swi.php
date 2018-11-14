
<?php   // echo $INDEX;
// echo $add." ".$ido2." ";
?>
<script >

pp= "<?php  echo $INDEX; ?>"; 

</script>

<table> 
<?php  if($StrMsw>0 )
{ //include "LM.php";
?>

<?php   if($KIB<1){
$qYr=date("y",time());
$qMt=date("m",time());
$qDy=date("d",time());
if($cty<25) $qYr-=1;
?>
<script >
<?php   include "jsInput.php";?>
function switchBE(){window.location = pp + '&KIB=1&qYr='+qYr+'&qMt='+qMt+'&qDy='+qDy;}
</script>
<tr class="menuKIB">  <img  src="../Pic/png/0.png" width="40" height="14" title="időgép bekapcsolása az elmúlt hat év adatainak megtekintéséhez"  onClick=switchBE();>&nbsp;időgép kikapcsolva <br></tr>
<?php  }
elseif($KIB>0){
?>
<script >
function switchKI(){window.location = pp + '&KIB=0';}
</script>
<tr class="menuKIB">  <img  src="../Pic/png/1.png" width="40" height="14" title="időgép kikapcsolása, legfrisebb mérési adatok megjelenítése"  onClick=switchKI();>&nbsp;időgép bekapcsolva<br></tr>
<?php  

//if ($cmd==1 or $cmd==8)
{
echo $elõre_visszaléptetés."<br>";

// echo $cmd.'/'.$cty.'-'.$quser[cty]; ?>
<form name="form1d" method="GET" action="<?php  echo $INDEX.'&gim=0&strm='.$strm;?> <?php   if($cmd==8) echo '&cmd=8';else echo'&cmd=1';?>">
<?php   include "FormInput.php"; ?>
	   <span valign=middle  onClick="LeftG()"  onDblClick="LeftG()"  > 
	   <img src="../kepek/buttons/aL.png" width=16 height=11 alt="SUBMIT!" title="SUBMIT!" 	onmouseover="this.style.background='red'" onmouseout="this.style.background=''" > </span>
<span valign=middle>

 <select name="add" class="smallgreyBold" onChange="document.form1d.submit()" >
<?php  
  			switch($add)
  			{
   				case 60: 	$ad=$aadi;		break;
  				case 600:	$ad=$aadt;		break;
  				case 3600:	$ad=$aadh;       	break;
  				case 21600:	$ad=$aads;		break;
  				case 86400:	$ad=$aadn;		break;
   				case 604800:	$ad=$aadw;		break;
   				case 2632320:	$ad=$aadm;		break;
  				case 7896960:	$ad=$aadq;		break;
  				case 31579200:	$ad=$aady;		break;
			}
  			 
 ?>
<option value='<?php   echo $add;?>' selected><?php   echo $ad;?></option>
<option value="60"       ><?php   echo $vadi;?></option>
<option value="600"      ><?php   echo $vadt;?></option>
<option value="3600"     ><?php   echo $vadh;?></option>
<option value="21600"    ><?php   echo $vads;?></option>
<option value="86400"    ><?php   echo $vadn;?></option>
<option value="604800"   ><?php   echo $vadw;?></option>
<option value="2632320"  ><?php   echo $vadm;?></option>
<option value="7896960"  ><?php   echo $vadq;?></option>
<option value="31579200" ><?php   echo $vady;?></option>
</select>
</span>
	   <span valign=middle onClick="RightG()" onDblClick="RightG()" >
	   <img src="../kepek/buttons/aR.png" width=16 height=11 alt="SUBMIT!" title="SUBMIT!" 	onmouseover="this.style.background='red'" onmouseout="this.style.background=''" > </span>

</form1d>

<?php   include("qYr_swi.php");?><tr>

<?php   include("qMt_swi.php");?><tr>
 
<?php   include("qDy_swi.php");?>

<?php  } /*
//else 
{?>
<span valign=middle>
 <select name="ada" class="smallgreyBold" onChange="document.form2.submit()" >
<?php  
  			switch($ada)
  			{
  				case 60: 	$ad=$aadi;		break;
  				case 600:	$ad=$aadt;		break;
  				case 3600:	$ad=$aadh;       	break;
  				case 21600:	$ad=$aads;		break;
  				case 86400:	$ad=$aadn;		break;
   				case 604800:	$ad=$aadw;		break;
   				case 2632320:	$ad=$aadm;		break;
  				case 7896960:	$ad=$aadq;		break;
  				case 31579200:	$ad=$aady;		break;
			}
  			 
?>
<option value='<?php   echo $ada;?>' selected><?php   echo $ad.' '.$átlagértékek;?></option>
<option value="60"       ><?php   echo $vadi;?></option>
<option value="600"      ><?php   echo $vadt;?></option>
<option value="3600"     ><?php   echo $vadh;?></option>
<option value="21600"    ><?php   echo $vads;?></option>
<option value="86400"    ><?php   echo $vadn;?></option>
<option value="604800"   ><?php   echo $vadw;?></option>
<option value="2632320"  ><?php   echo $vadm;?></option>
<option value="7896960"  ><?php   echo $vadq;?></option>
<option value="31579200" ><?php   echo $vady;?></option>
</select>
</span>
<?php  }*/?>


<?php  }}?>
 </table>

