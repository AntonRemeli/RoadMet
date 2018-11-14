<?php  //echo '$regg: '.$regg;?>
	<!-- ALKERETben DÁTUMválasztó SOR: -->
 <?php   header("Location: <?php   echo $INDEX;?>"); ?>
         <!-- DÁTUM-ALTÁBLA:  -->
			<table  cellspacing="0" cellpadding="0" style="border-collapse: collapse" class="smallgreyBold">
<tr>
        	<form name="idogep" action="<?php  echo $INDEX;?>&ido1=<?php  echo $_GET['ido1'];?>&ido2=<?php  echo $_GET['ido2'];?>&régg=<?php  echo $regg;?>&aa=1#tocI" method="get"  >

<?php   include "FormInput.php";?>


<!-- ido1  calendar:  -->
			<td valign=middle> <a href="<?php   print("mid_at_std.php$sess")?>" target="blank"><?php  echo $Adat ;?></a>
<a href="<?php   print("mid_at_stdAll.php$sess")?>" target="blank"><?php  echo "_" ;?></a>
 <?php  echo $listázásdátum ;?><a onClick="Lefh()" onDblClick="Lefh6()"><?php  echo $tól ;?></a>

<img src="../kepek/space.gif" width=5 height=1><input type="hidden" name="ido1" id="f_date_c" readonly="1" /></td>
 			<td  valign=middle><img src="../kepek/img.gif" id="f_trigger_c" style="cursor: pointer; border: 0px solid red;"
 title="<?php  echo $Kezdõidõválasztása ;?>"  alt="<?php  echo $Kezdõidõválasztása ;?>"
      			onmouseover="this.style.background='red';" onmouseout="this.style.background=''" /></td>
      		<td><img src="../kepek/space.gif" width=3 height=1></td>

   <td valign=middle  onClick="Left()"  onDblClick="Left7()"  ><img src="../kepek/buttons/aL.png" width=16 height=18 alt="SUBMIT!" title="SUBMIT!" > </td>
<td valign=middle>
.</td>
   <td valign=middle onClick="Right()" onDblClick="Right7()" ><img src="../kepek/buttons/aR.png" width=16 height=18 alt="SUBMIT!" title="SUBMIT!" > </td>
  

<!-- ido2  calendar:  -->
			  <td valign=middle>                  
  <img src="../kepek/space.gif" width=5 height=1><input type="hidden" name="ido2" id="f_date_b" readonly="1" /></td>
 			<td valign=middle><img src="../kepek/img.gif" id="f_trigger_b" style="cursor: pointer; border: 0px solid red;" 
title="<?php  echo $Záróidõkiválasztása ;?>"     alt="<?php  echo $Záróidõkiválasztása ;?>"
			onmouseover="this.style.background='red';" onmouseout="this.style.background=''" /></td>
<td valign=middle><?php  echo $pppdátum ;?><a  onClick="Righ()" onDblClick="Righ6()"><?php  echo $ig ;?></a></td>



    <td valign=middle  onClick="LefSt()"  onDblClick="LefSt10()"  ><img src="../kepek/space.gif" width=5 height=1>
<img src="../kepek/buttons/aL.png" width=8 height=18 alt="SUBMIT!" title="SUBMIT!"> </td>
 
                  <td valign=middle><input type="image" value="submitname" src="<?php  echo $L?>/st_go<?php  echo $L?>.gif"
 width="100" height="25" border="0" alt="SUBMIT!" title="SUBMIT!" name="image"></td>

   <td valign=middle onClick="RigSt()" onDblClick="RigSt10()" >
<img src="../kepek/buttons/aR.png" width=8 height=18 alt="SUBMIT!" title="SUBMIT!"> </td>
   <td valign=middle onClick="RigSt1()" onDblClick="RigSt5()" >_<?php   echo $GSW;?>:</td>

 <td><a href="<?php   print("csv2hrT1.php$sess")?>" target="top"><?php  print(" &nbsp;&nbsp;&nbsp; DATA EXPORT ");?></a></td>

		
<!-- ido1  calendar:  -->
		<script type="text/javascript">
    		Calendar.setup({
	        inputField     :    "f_date_c",     // id of the input field
    	    ifFormat       :    "%s",      // format of the input field
        	button         :    "f_trigger_c",  // trigger for the calendar (button ID)
        	align          :    "Br",           // alignment (defaults to "Bl")
        	singleClick    :    "true"
    		});
    	onClose()	
		</script> 		  

<!-- ido2  calendar:  -->
		<script type="text/javascript">
    		Calendar.setup({
	        inputField     :    "f_date_b",     // id of the input field
    	    ifFormat       :    "%s",      // format of the input field
        	button         :    "f_trigger_b",  // trigger for the calendar (button ID)
        	align          :    "Br",           // alignment (defaults to "Bl")
        	singleClick    :    "true"
    		});
		</script>

<?php  //if($StrMsw>0) { include "ArrowLRd.php";}?>

           </form>

           <?php  if($lgn=='Xps'  && ($regg=='' || $regg==0))  include "calibrate.php";   ?>
</tr>
       
  </table><!-- DÁTUM-ALTÁBLA vége -->

