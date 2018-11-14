<!DOCTYPE html>
<html>
<body>
<?php   
// -----------------------3) Kérdezze le a könyv nélküli szerzőket.....(mezők: szerzo_nev)-----------------------------------   

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


		

		$quers = "SELECT * FROM konyv_szerzoje ";
		$ress = mysqli_query($sql_connect,$quers);
  $loop=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
  {
$szerzo_id[$loop]=$rows[szerzo_id];
$loop++;
}
$l=$loop;

$queru = "SELECT * FROM szerzo ";
		$resu = mysqli_query($sql_connect,$queru);
  $loop=0;
while ($rowm = mysqli_fetch_array($resu, MYSQLI_ASSOC))
  {
$szerzo_id[$loop]=$rowm[szerzo_id];
$szerzo_nev[$loop]=$rowm[szerzo_nev];
$loop++;
}

$n=$loop;

  mysqli_close ($sql_connect);
	?>      			         		 




          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo " szerzo_nev"?></td>
               
               
              	</tr>                
              <?php  

      
              for($loop=1;$loop<$n;$loop++)
              {
              	  $szerzo_id = $szerzo_id[$loop];
$s=0;
  for($loops=1;$loops<$l;$loops++)
              {
              	 if( $szerzo_id = $szerzo_id[$loops]) $s++;
}
 if( $s>0) $szerzo_nev=$szerzo_nev[$loop]  ;
  
             	            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=right><?php  print("$szerzo_nev");?></td>
                			
                			</tr>
              			<?php                 		
              }

 </table> 


 
</body>
</html>

