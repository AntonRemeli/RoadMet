

<script >
/*

	L="<?php  echo $L; ?>";
	lgn="<?php  echo $lgn; ?>";
	pwd="<?php  echo $pwd; ?>";
	usn="<?php  echo $usn; ?>";
	pass="<?php  echo $pass; ?>";
	cty="<?php  echo $cty; ?>";
	cmd="<?php  echo $cmd; ?>";
	dd="<?php  echo $dd; ?>";
	dd1s="<?php  echo $dd1s; ?>";
	dd2s="<?php  echo $dd2s; ?>";
	ido1="<?php  echo $ido1+1; ?>";
	ido2="<?php  echo $ido2+1; ?>";
	ido1s="<?php  echo $ido1s; ?>";
	ido2s="<?php  echo $ido2s; ?>";



sessn="?dd="+dd+"&dd1s="+dd1s+"&dd2s="+dd2s+"&ido1="+ido1+"&ido2="+ido2+"&ido1s="+ido1s+"&ido2s="+ido2s+"&L="+L+"&lgn="+lgn+"&pwd="+pwd+"&usn="+usn+"&pass="+pass+"&cty="+cty+"&cmd="+cmd;

*/
//pp = 'index.php'+sessn+'';
//pp= "<?php  echo $INDEX.'&q='.time(); ?>"; 
pp= "<?php  echo $INDEX; ?>"; 

function switch0ALL(){window.location = pp + '&GSW=0';}
function switch1BPW(){window.location = pp + '&GSW=1';}
function switch2BWS(){window.location = pp + '&GSW=2';}
function switch3BHS(){window.location = pp + '&GSW=3';}
function switch4BRS(){window.location = pp + '&GSW=4';}
function switch5BRS(){window.location = pp + '&GSW=5';}



</script>


 <table> 

 <td class="headerx" width="11%" align="center" > 
  
   <table class="menux" id="section88"  cellpadding="0" ><tr>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'.png?q='.time();?>"  title="ALL"  onClick=switch0ALL() width="120" height="60" border="1"  usemap="#gomb0<?php  echo $dd;?>";></td>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'0.png?q='.time();?>"  title="BPW"  onClick=switch1BPW() width="120" height="60" border="1"  usemap="#gomb1<?php  echo $dd;?>";></td>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'00.png?q='.time();?>"  title="BWS"  onClick=switch2BWS() width="120" height="60" border="1"  usemap="#gomb2<?php  echo $dd;?>";></td>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'000.png?q='.time();?>"  title="BHS"  onClick=switch3BHS() width="120" height="60" border="1"  usemap="#gomb3<?php  echo $dd;?>";></td>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'0000.png?q='.time();?>"  title="BRS"  onClick=switch4BRS() width="120" height="60" border="1"  usemap="#gomb4<?php  echo $dd;?>";></td>
<td class="menux"><img  src="<?php   echo '../IMG1/'.$dd.'00000.png?q='.time();?>"  title="BRS"  onClick=switch5BRS() width="120" height="60" border="1"  usemap="#gomb5<?php  echo $dd;?>";></td>

</tr>
   </table>
   </td> 
 </table>
  
<map name="gomb0<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
<map name="gomb1<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'0.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
<map name="gomb2<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'00.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
<map name="gomb3<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
<map name="gomb4<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'0000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
<map name="gomb5<?php  echo $dd;?>">
<area shape="rect" coords="0, 0, 120, 25"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$dd.'00000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>
