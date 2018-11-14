
<?php  
include "sess.php";

if (isset($_GET['serv0']) or isset($_GET['serv']) or isset($_GET['inserv']) or isset($_GET['hSc']) or $ns!='' or $_GET['ns']!=''  )
{	$ns++;
  	include "servAget.php";  
//echo $ns."  a rutinkört az index forgatja meg, GET['serv0']   ".$_GET['serv0'].' st1:  '. $_GET['st1'].' zrk:  '. $_GET['zrk'].' inserv:  '. $_GET['inserv'];
//echo 'stn'.$stn.', get '.$_GET['stn'];

}

else { 
	include "servAget.php";
	$ns=0;
//echo 'stn'.$stn.', get '.$_GET['stn'];

if($stn<9000) $serv=$SWdev; else $serv=$service;

//echo $ns." startup HWservice ccccccccccccccccccc   serv0: ".$serv0; 
?> 		      
 <META HTTP-EQUIV=Refresh CONTENT="0; URL=<?php  echo $INDEX.''.$serv.''.$ns;?>">
<?php  }?>


<h1><?php  echo $SzervizLista;?>  <?php  if($hRg!='') echo $hRg.". Régió / ".$hSc;?></h1>  


<table <?php  if($tab!=''){?> border="1"  cellpadding="2" cellspacing="1" bgcolor="#ffffff"<?php  }?> >


<tr>
<form name="service0" method="get" action="<?php  echo 'index.php'.$sess;?>">
<?php  include "FormInput.php";?>

  <td width="1%"><input type="submit" name="Submit" value="@"></td>
	  <td width="1%">    <a title="<?php  echo $alsóhibakód?>"><input name="st1" type="text" size="1" id="st1" value="<?php   echo $st1;?>"></a> <a title="<?php  echo $felsöhibakód?>"><input name="st2" type="text" size="1" id="st2" value="<?php   echo $st2;?>"></a></td>

<td width="1%"><a title="<?php  echo $állomásszám?>"><input name="stm" type="text" size="1" id="stm" value="<?php   echo $stm;?>"></a><a title="<?php  echo $kezdöállomás?>"><input name="stn" type="text" size="1" id="stn" value="<?php   echo $stn;?>"></a></td>

 
      <td width="2%" align="left"><a title="<?php  echo $oszlopszélesség?>"><input name="hlw" type="text" size="1" id="hlw" value="<?php   echo $hlw;?>"></a><a title="<?php  echo $alsószervizkód?>"><input name="hSc" type="text" size="1" id="hSc" value="<?php   echo $hSc;?>"></a><a title="<?php  echo $felsõszervizkód?>"><input name="hSd" type="text" size="1" id="hSd" value="<?php   echo $hSd;?>"></a><a title="<?php  echo $régiószürö?>"><input name="hRg" type="text" size="1" id="hRg" value="<?php   echo $hRg;?>"></a></td>
      <td width="2%" align="left"><a title="<?php  echo $oszlopszélesség?>"><input name="tnv" type="text" size="1" id="tnv" value="<?php   echo $tnv;?>"></a><a title="<?php  echo $nyomtatható?>"><input name="tab" type="text" size="1" id="tab" value="<?php   echo $tab;?>"></a></td>
      <td width="2%" align="left"><a title="<?php  echo $oszlopszélesség?>"><input name="mkj" type="text" size="1" id="mkj" value="<?php   echo $mkj;?>"></a><a title="<?php  echo $alsóköltség?>"><input name="mk1" type="text" size="1" id="mk1" value="<?php   echo $mk1;?>"></a><a title="<?php  echo $felsõköltség?>"><input name="mk2" type="text" size="1" id="mk2" value="<?php   echo $mk2;?>"></a></td>
      <td width="2%" align="left"><a title="<?php  echo $kezdöidö?>"><input name="tm1" type="text" size="1" id="tm1" value="<?php   echo $tm1;?>"></a><a title="<?php  echo $záróidö?>"><input name="tm2" type="text" size="1" id="tm2" value="<?php   echo $tm2;?>"></a></td>
      <td width="2%" align="left"><a title="<?php  echo $oszlopszélesség?>"><input name="zrj" type="text" size="1" id="zrj" value="<?php   echo $zrj;?>"></a><a title="<?php  echo $hibaszürö.''.$szoftverfejlesztésnek?> "><input name="zrk" type="text" size="1" id="zrk" value="<?php   echo $zrk;?>"</td>

<input type="hidden" name="serv0" value="1">


</tr>
</form>
<?php  

	if($stn<9000)   include "servSWd.php";
	else     	include "servAll.php";

 
?>


</table>   
