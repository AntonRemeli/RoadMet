<?php  // include("mid_fej.php"); ?>
<?php  
	
$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$query = "SELECT id,date,station_id,name,county,user,description FROM report where user='$lgn' and reply_to=0 order by time desc limit 20";
$res = mysqli_query($sql_connect,$query);

?>
	<form name="jelentes" method="get" action="mid_era.php<?php  echo $sess?>">

<?php   include "FormInput.php";?>

<input type=hidden name="cmd" value=7>	
<input type=hidden name="dd" value=<?php  echo $_GET['dd']?>>

<!-- FELSÕ HIBAJELENTÕ BLOKK  -->
<table width="100%" height="40" border="0" cellpadding="2" cellspacing="0">
<tr> <td colspan="2" align="center" valign="middle" class="titlegreyBoldCopy" > <?php   echo $ÉszrevételHibabejelentés;?></td>              </tr>

          <tr> 
	    <td width="30%" align="right" valign="middle" class="midgreyBoldCopy"><?php   echo $Név;?>:</td>
            <td width="50%"> <input name="name" type="text" class="smallgreyBoldCopy" size="50">
            <input name="user" type="hidden" VALUE="<?php   echo $lgn; ?>">
            </td>
          </tr>
          <tr> 
	    <td width="30%" align="right" valign="middle" class="midgreyBoldCopy"><?php   echo $Megyeváros;?>:</td>
            <td width="50%"><input name="county" type="text" class="smallgreyBoldCopy" size="50"></td>
          </tr>
          <tr> 
	    <td width="30%" align="right" valign="middle" class="midgreyBoldCopy"><?php   echo $Bejelentésjellege;?>:</td>
            <td width="50%">
            <select name="type" class="smallgreyBoldCopy">
		<option value="0" selected>--- <?php   echo $Kéremválaszon;?> ---</option>
		<option value="1"><?php   echo $Weboldalhiba;?></option>
		<option value="2"><?php   echo $Állomáshiba;?></option>
		<option value="3"><?php   echo $Észrevételkérdés;?></option>
		<option value="4"><?php   echo $Kritikajavaslat;?></option>
            </select></td>
          </tr>
          <tr> 
	    <td width="30%" align="right" valign="middle" class="midgreyBoldCopy"><?php   echo $Elérhetõség;?>:</td>
            <td><input name="contact" type="text" class="smallgreyBoldCopy" size="50"></td>
          </tr>
          <tr> 
	    <td width="30%" align="right" valign="top" class="midgreyBoldCopy"><?php   echo $Észrevételrészletesleírása;?></td>
            <td><textarea name="description" cols="49" rows="20" class="smallgreyBoldCopy"></textarea>
            </td>
          </tr>
          <tr> 
            <td colspan="2" align="right" valign="middle" class="smallgreyBold">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="right" valign="middle" class="smallgreyBold"><table width="100%" border="0" cellpadding="0" bgcolor="#D0CEA4">
                <tr align="center" valign="middle"> 
		  <td> <input type="submit" name="Submit" value="<?php   echo $Elküld;?>"> </td>
		  <td> <input type="reset" name="Submit2" value="<?php   echo $Törlés;?>"> </td>
                </tr>

 </table>  <!-- FELSÕ HIBAJELENTÕ BLOKK vége -->
 
        
        <!-- ALSÓ BLOKK LE-TOP KONTROLL >
        <table width="100%" >

         	  <?php  
         	  while ($rows = mysqli_fetch_row($res)){
         	  	  
         	  	$query1 = "SELECT id,time,name,county,contact,description,user,station_id FROM report where reply_to=$rows[0]";
			  	$res1 = mysqli_query($sql_connect,$query1);
			  	$rows1 = mysqli_fetch_row($res1);
         	  ?>

					<table width="750" border="0" cellspacing="2" cellpadding="2" aling=center>
  						<tr bgcolor="#EBCBBA" class="midgreyBoldCopy"> 
    						<td width="100" align="right"><?php   echo $Felhasználó; ?>:</td>
    						<td width="100"><font color="#000000"><?php  echo $rows[5]; ?></font></td>
    						<td width="100" align="right"><?php   echo $Név; ?>:</td>
    						<td width="100"><font color="#000000"><?php  echo $rows[3]; ?></font></td>
    						<td width="100" align="right"><?php   echo $Megye; ?>:</td>
    						<td width="100"><font color="#000000"><?php  echo $rows[4]; ?></font></td>
  						</tr>
  						<tr align="left" bgcolor="#EBCBBA" class="midgreyBoldCopy"> 
    						<td height="20" colspan="6" class="smallgrey"><?php   echo $Datum; ?>: <?php  echo $rows[1]; ?></td>
  						</tr>
  						<tr align="left" bgcolor="#EBCBBA" class="midgreyBoldCopy"> 
    						<td height="20" colspan="6" class="smallgrey"><?php   echo $Felhasználóihibajelentés; ?>:</td>
  						</tr>
  						<tr align="left" bgcolor="#EBCBBA" class="midgreyBoldCopy"> 
    						<td height="19" colspan="6" class="smallgrey"><font color="#000000"><?php  echo $rows[6]; ?></font></td>
  						</tr>
  						<tr align="left" bgcolor="#D6EBBE" class="midgreyBoldCopy"> 
    						<td height="20" colspan="6" class="smallgrey"><?php   echo $UTMETválasz; ?>:</td>
  						</tr>
  						<tr align="left" bgcolor="#D6EBBE" class="midgreyBoldCopy"> 
    						<td height="20" colspan="6" class="smallgrey"><font color="#000000"><?php  echo $rows1[5]; ?></font></td>
  						</tr>
					</table>  
					<br>
			<?php  				       	  
			}			
			?>
        	  

 </form>	  
<?php  

mysqli_close ($sql_connect);


//	include "servAll.php";
	include "servLst.php";

?>


</table>     <!-- BELSO BLOKK LE-TOP KONTROLL vége-->
