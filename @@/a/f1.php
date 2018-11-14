<!DOCTYPE html>
<html>
<body>
<?php   

// ------------------- 1) Kérdezze le az összes nettó eladott értéket ..... (mezők: netto_osszesen)----------------------------------  

 $sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


		$queru = "SELECT * FROM konyv_eladas ";
		$resu = mysqli_query($sql_connect,$queru);
 
  $num_rows = mysqli_num_rows( $resu );

  $loop=0;


while ($rowm = mysqli_fetch_array($resu, MYSQLI_ASSOC))
  {
$loop++;	
$netto_osszesen[$loop]=$rowm[netto_egysegar];
}

  mysqli_close ($sql_connect);
	?>      			         		 


          	<table width="600" border="0" cellspacing="1" cellpadding="2" class="smallergrey">
          		<tr bgcolor="#F0FEF4" align=center class="smallgreyBold"> 
                <td width="150" align=center><?php   echo "mező: netto_osszesen"?></td>
               
              	</tr>                
              <?php  

      
              for($loop=1;$loop<$num_rows;$loop++)
              {
              	  $netto_ossz += $netto_osszesen[$loop];
}
             	            ?>
            			  	<tr bgcolor="#D0CEA4" align=right> 
                			<td width="150" align=right><?php  print("$netto_ossz");?></td>
                			</tr>
              			<?php                 		
                                            
            ?>
          	            	
            </table>    
 
</body>
</html>

