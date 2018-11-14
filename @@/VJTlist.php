<?php  

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

 $dp=$_GET['dp'];
$ido1=time()-3*86400;

//	id	stNo	automanual	instr	date	timestamp

//$queryLD = "SELECT  *  FROM  VJT  where  date<$ido1 and stNo='$dp' ";
$queryLD = "SELECT  *  FROM  VJT   where  date>$ido1 and stNo='$dp' order by -date  ";

$reLD = mysqli_query($sql_connect,$queryLD);

	mysqli_close ($sql_connect);
?>
  <table width="100%" border="0" cellspacing="1" cellpadding="2"  align="center" class="smallgreyBold">
   <tr  bgcolor='#D0CEA4' align=right   class="smallgreyBold" >
              
 <td width="1%" ><small>  ZNAK </small> </td>
 <td width="2%" ><small> NAREDBA </small></td>
 <td width="1%" ><small> MODUS </small></td>
 <td width="12%" ><small> ISPRAVAN? </small></td>
 <td width="7%" ><small> VRIJEME </small></td>
   </tr>
<?php  
while ($rowm = mysqli_fetch_array($reLD, MYSQLI_ASSOC))

//looping measure START:
  {
?>
<?php   // if($rowm[putout][1]=='S' ) print("bgcolor='#D0CEA4'"); else print("bgcolor='#ff3300'"); ?> 
<!-- INLINE ALKERETTÁBLA LE-TOP KONTROLL -->

               <!-- ALKERETTÁBLA ADATSORA: -->

              <tr  bgcolor='#D0CEA4' align=right   class="smallgreyBold" >
              
 <td width="1%" ><small><?php   print($rowm[stNo]);?></small></td>
 <td width="2%" ><small><?php   if($rowm[instr][1]=='') print("NAREDBA"); if($rowm[instr][1]=='0' ) print("isključen znak"); if($rowm[instr][1]=='1' ) print("poledica");  if($rowm[instr][1]=='2' ) print("sklisko");?></small></td>
 <td width="1%" ><small><?php   if($rowm[automanual]==1) print( "automatski"); else print("manualno"); ?></small></td>
 <td width="12%" <?php   if($rowm[putout][0]!='S' ) print("bgcolor='#ff3300'"); ?>   ><small><?php   print($rowm[putout]);?></small></td>
 <td width="7%" ><small><?php   print($rowm[timestamp]);?></small></td>
   </tr>
<?php  
  }
//looping measure END
?>
</table>



