<!DOCTYPE html>
<html>
<body>
<?php   
// -----------------------5) Kérdezze le azokat a könyveket, ahol az összes nettó eladás értéke nagyobb, mint 100,000.00

//A legnagyobb bevételű könyvekkel kezdve maximum 100-at.

//(mezők: konyv_azonosito, cim, ossz_netto)-----------------------------------   

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

$quere = "SELECT * FROM konyv_eladas order by konyv_azonosito";
		$rese = mysqli_query($sql_connect,$quere);
  $loop=0;
while ($rowe = mysqli_fetch_array($rese, MYSQLI_ASSOC))
  {
$loop++;
$konyv_azonositoe[$loop]=$rowe[konyv_azonosito];
$netto_egysegar[$loop]=$rowe[netto_egysegar];
}

$e=$loop;

  mysqli_close ($sql_connect);
	


$n=1;
$netto=0;
$nettok[0]=0;      
              for($loopk=1;$loopk<$k+1;$loopk++)
              {
              	$konyv_azonositok = $konyv_azonositok[$loopk];
  		$cim = $cim[$loopk];

  for($loope=$n;$loope<$e+1;$loope++)
              {
              	 if( $konyv_azonositok = $konyv_azonositoe[$loope]) $netto+=$netto_egysegar[$loope];
else {

 $nettok[$loopk]=$netto;
              	           
 $netto=$netto_egysegar[$loope];  
 $n=$loope;       		
    }          }   }


?>      			         		 




          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo " konyv_azonosito"?></td>
                <td width="150" align=center><?php   echo "  cim"?></td>
                <td width="150" align=center><?php   echo "  ossz_netto"?></td>
               
               
              	</tr>                
              <?php  



rsort($nettok);

$arrlength=count($nettok);
for($x=0;$x<$arrlength;$x++)
   {
             	$konyv_azonositok = $konyv_azonositok[$x];
  		$cim = $cim[$x];


$netto=$nettok[$x];
 ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=right><?php  print("$konyv_azonositok");?></td>
                			<td width="150" align=right><?php  print("$cim");?></td>
                			<td width="150" align=right><?php  print("$netto");?></td>
                			
                			</tr>
              			<?php    

   }
?>





 </table> 


</body>
</html>

 
