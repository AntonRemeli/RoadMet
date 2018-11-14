
      
<tr>
 
	<form name="inservice" method="get" action="<?php   echo $INDEX;?>#tocI">

<?php   //  <form name="inservice" method="get" action="index.php?cmd=$cmd&dd=$stno&ido1=$ido1&ido2=$ido2#tocI">

 include "FormInput.php";?>

 
      <td width="2%" align="left"><input type="submit" name="Submit" value="+"><small><small>svId:</small></small> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

      <td width="15%" align="left">
<a href='<?php  print("$INDEX");?>&dd=<?php  print($stno);?>&cmd=2' target="_blank"><?php  echo $stno."";?></a></td>
<td><a href='<?php  print("$INDEX");?>&dd=<?php  print($stno);?>&cmd=4' target="_blank"><?php  echo $st_Ort."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";?></a> </td>
      <td width="22%" align="left"><?php  echo $hibaleírás;?></td>
      <td width="22%" align="left"><?php  echo $tennivaló;?></td>
      <td width="22%" align="left"><?php  echo $munkajegyzet;?></td>
      <td width="10%" align="left"><?php  echo $mikor;?></td>
      <td width="20%" align="left"><?php  echo $zárójelentés;?> </td> <?php  if($stno<9000){$stno=0?>
      <td width="20%" align="left"><?php  echo $áttét.'  '.$stno;?> </td><?php  }?>
 <td width="15%" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </td>
  <input type="hidden" name="inserv" value="1">
  <input type="hidden" name="stno" value="<?php  echo $stno;?>">  

  <input type="hidden" name="stm" value="<?php  echo $stm;?>">  
  <input type="hidden" name="stn" value="<?php  echo $stn;?>">  
  <input type="hidden" name="st1" value="<?php  echo $st1;?>">  
  <input type="hidden" name="st2" value="<?php  echo $st2;?>">  
  <input type="hidden" name="hlw" value="<?php  echo $hlw;?>">  
  <input type="hidden" name="hSc" value="<?php  echo $hSc;?>">  
  <input type="hidden" name="hSd" value="<?php  echo $hSd;?>">  
  <input type="hidden" name="tnv" value="<?php  echo $tnv;?>">  
  <input type="hidden" name="tab" value="<?php  echo $tab;?>">  
  <input type="hidden" name="mkj" value="<?php  echo $mkj;?>">  
  <input type="hidden" name="mk1" value="<?php  echo $mk1;?>">  
  <input type="hidden" name="mk2" value="<?php  echo $mk2;?>">  
  <input type="hidden" name="tm1" value="<?php  echo $tm1;?>">  
  <input type="hidden" name="tm2" value="<?php  echo $tm2;?>">  
  <input type="hidden" name="zrj" value="<?php  echo $zrj;?>">  
  <input type="hidden" name="zrk" value="<?php  echo $zrk;?>">  




</form>

</tr>






