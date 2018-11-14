<!DOCTYPE html>
<html>
<body>
<?php   
// -----------------------6) Kérdezze le az összes könyv azonosítóját és címét, mellé annak összes szerzőjét ", " (vessző és szó-köz) elválasztással.

//A szerző listában a szerzők részesedés szerinti csökkenő sorrendben legyenek.

//(mezők: cim, szerzok)-----------------------------------   

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


		

		$querk = "SELECT * FROM konyv order by konyv_azonosito ";
		$resk = mysqli_query($sql_connect,$querk); 
  $loop=0;
while ($rowk = mysqli_fetch_array($resk, MYSQLI_ASSOC))
  {
$loop++;
$konyv_azonositok[$loop]=$rowk[konyv_azonosito];
}
$k=$loop;


		$quers = "SELECT * FROM konyv_szerzoje  order by konyv_azonosito,reszesedes";
		$ress = mysqli_query($sql_connect,$quers);
  $loop=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
  {
$konyv_azonositos[$loop]=$rows[konyv_azonosito];
$szerzo_ids[$loop]=$rows[szerzo_id];
$reszesedes[$loop]=$rows[reszesedes];
$loop++;
}
$s=$loop;

$quern = "SELECT * FROM szerzo ";
		$resn = mysqli_query($sql_connect,$quern);
  $loop=0;
while ($rown = mysqli_fetch_array($resn, MYSQLI_ASSOC))
  {
$szerzo_idn[$loop]=$rown[szerzo_id];
$szerzo_nev[$loop]=$rown[szerzo_nev];
$loop++;
}

$n=$loop;

  mysqli_close ($sql_connect);
	
?>      			         		 




          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo "  cim"?></td>
                <td width="150" align=center><?php   echo "  szerzok"?></td>
               
               
              	</tr>                
              <?php  

$nn=1;
    
              for($loopk=1;$loopk<$k+1;$loopk++)
              {
              	$konyv_azonositok = $konyv_azonositok[$loopk];
  		$cim = $cim[$loopk];
$szerzok=''; 
  for($loops=$nn;$loops<$s+1;$loops++)
              {
              	 if( $konyv_azonositok = $konyv_azonositos[$loops]) 
  for($loopn=$1;$loopn<$n+1;$loopn++)
              {
 if( $szerzo_ids[$loops] = $szerzo_idn[$loopn]) $szerzok=$szerzok.", ".$szerzo_nev[$loopn];
}
 
 $nn=$loops;       		
    }        

    ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			
                			<td width="150" align=right><?php  print("$cim");?></td>
                			<td width="150" align=right><?php  print("$szerzok");?></td>
                			
                			</tr>
              			<?php     



 }



?>





 </table> 


</body>
</html>

 
