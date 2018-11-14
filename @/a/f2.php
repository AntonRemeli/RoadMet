<!DOCTYPE html>
<html>
<body>
<?php   
// -----------------------2) Kérdezze le a szerző nélküli könyveket-----------------------------------  (mezők: konyv_azonosito, cim)      

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


		

		$querk = "SELECT * FROM konyv ";
		$resk = mysqli_query($sql_connect,$querk);
  $loop=0;
while ($rowk = mysqli_fetch_array($resk, MYSQLI_ASSOC))
  {
$konyv_azonositok[$loop]=$rowk[konyv_azonosito];
$cim[$loop]=$rowk[cim];
$loop++;
}
$k=$loop;

		$quers = "SELECT * FROM konyv_szerzoje ";
		$ress = mysqli_query($sql_connect,$quers);
  $loop=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
  {
$konyv_azonositol[$loop]=$rows[konyv_azonosito];
$szerzo_idl[$loop]=$rows[szerzo_id];
$loop++;
}
$l=$loop;

$queru = "SELECT * FROM szerzo ";
		$resu = mysqli_query($sql_connect,$queru);
  $loop=0;
while ($rowm = mysqli_fetch_array($resu, MYSQLI_ASSOC))
  {
$szerzo_nev[$loop]=$rowm[szerzo_nev];
if($szerzo_nev[$loop]=='')
{
$loop++;	
$szerzo_id[$loop]=$rowm[szerzo_id];
}
}

$n=$loop;

  mysqli_close ($sql_connect);
	?>      			         		 


A SZERZO NEVE NULLKARAKTERES:

          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo " konyv_azonosito"?></td>
                <td width="150" align=center><?php   echo "  cim"?></td>
               
              	</tr>                
              <?php  

      
              for($loop=1;$loop<$n;$loop++)
              {
              	  $szerzo_id = $szerzo_id[$loop];

  for($loopl=1;$loops<$l;$loopl++)
              {
              	 if( $szerzo_id = $szerzo_idl[$loopl])

{ $konyv_azonosito=$konyv_azonosito;[$loopl]  ;
  for($loopk=1;$loopk<$k;$loopk++)
              {
		 if( $konyv_azonosito = $konyv_azonositok[$loopk]) $cim=$cim[$loopk]  ;

}
             	            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=right><?php  print("$konyv_azonosito");?></td>
                			<td width="150" align=right><?php  print("$cim");?></td>
                			</tr>
              			<?php                 		
              }   }  }

 </table> 


A konyv_szerzoje TAABLAABAN NEM TALAALHATOO A MEGFELELOE konyv_azonosito:


          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo " konyv_azonosito"?></td>
                <td width="150" align=center><?php   echo "  cim"?></td>
               
              	</tr>                
              <?php  

      

  for($loopk=1;$loopk<$k;$loopk++)
              {
$konyv_azonosito = $konyv_azonositok[$loopk];

$s=0;
 for($loopl=1;$loopl<$l;$loopl++)
              {
 if( $konyv_azonosito = $konyv_azonositol[$loopl]) $s++;
}

		 if( $s>0) $cim=$cim[$loopk]  ;


             	            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=right><?php  print("$konyv_azonosito");?></td>
                			<td width="150" align=right><?php  print("$cim");?></td>
                			</tr>
              			<?php                 		
              }

                             
            ?>
          	            	
            </table>    
 
</body>
</html>

