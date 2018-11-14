

<script >
pp=pp+'&aa=1';
function switchJan(){window.location = pp + '&qMt=1';}
function switchFeb(){window.location = pp + '&qMt=2';}
function switchMar(){window.location = pp + '&qMt=3';}
function switchApr(){window.location = pp + '&qMt=4';}
function switchMaj(){window.location = pp + '&qMt=5';}
function switchJun(){window.location = pp + '&qMt=6';}
function switchJul(){window.location = pp + '&qMt=7';}
function switchAug(){window.location = pp + '&qMt=8';}
function switchSep(){window.location = pp + '&qMt=9';}
function switchOkt(){window.location = pp + '&qMt=10';}
function switchNov(){window.location = pp + '&qMt=11';}
function switchDec(){window.location = pp + '&qMt=12';}
</script>

 <td class="headerqMt" width="11%" onmouseover="showmenu('sectionqMt')" onmouseout="hidemenu('sectionqMt')"> 
  
   <table class="menuqMt" id="sectionqMt"  cellpadding="0" align="right" ><tr>
<tr class="menuqYr">hónap  </tr>

<tr class="menuqMt">&nbsp;<img  src="../Pic/png/1.png" <?php   if($qMt==1) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Január;?>"  onClick=switchJan();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/2.png" <?php   if($qMt==2) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Február;?>"  onClick=switchFeb();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/3.png" <?php   if($qMt==3) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Március;?>"  onClick=switchMar();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/4.png" <?php   if($qMt==4) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Április;?>"  onClick=switchApr();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/5.png" <?php   if($qMt==5) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Május;?>"  onClick=switchMaj();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/6.png" <?php   if($qMt==6) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Június;?>"  onClick=switchJun();></tr>

<tr class="menuqMt">&nbsp;<br><img  src="../Pic/png/7.png" <?php   if($qMt==7) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Július;?>"  onClick=switchJul();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/8.png" <?php   if($qMt==8) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Augusztus;?>"  onClick=switchAug();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/9.png" <?php   if($qMt==9) echo 'width="32" height="32"'; else echo 'width="22" height="26"';?> title="<?php  echo $Szeptember;?>"  onClick=switchSep();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/1.png" <?php   if($qMt==10) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $Október;?>"  onClick=switchOkt();><img  src="../Pic/png/0.png" <?php   if($qMt==10) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $Október;?>"  onClick=switchOkt();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/1.png" <?php   if($qMt==11) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $November;?>"  onClick=switchNov();><img  src="../Pic/png/1.png" <?php   if($qMt==11) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $November;?>"  onClick=switchNov();></tr>
<tr class="menuqMt">&nbsp;<img  src="../Pic/png/1.png" <?php   if($qMt==12) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $December;?>"  onClick=switchDec();><img  src="../Pic/png/2.png" <?php   if($qMt==12) echo 'width="22" height="32"'; else echo 'width="12" height="26"';?> title="<?php  echo $December;?>"  onClick=switchdec();></tr>

</tr>

   </table>
   </td> 

 
