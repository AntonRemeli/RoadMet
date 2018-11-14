
<?php   
/*
//error_reporting(E_ALL);
error_reporting(0);

$MOD="mid_cs2.php";
include "LM.php";
//echo $lgn. '' .$pwd. '' .$usn;
include "log.php";
*/

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$queryS = "SELECT * FROM stations  where  cty=$cty ORDER BY st_id ";

 $reS = mysqli_query($sql_connect,$queryS);

mysqli_close ($sql_connect);

while ( $rowS = mysqli_fetch_array($reS, MYSQLI_ASSOC))

{   // measure START:

$stNo=$rowS[st_id];

$ido1=$ido2-86400/4;
//$ido1=$ido2-86400;  //nem megy, nem birja


$station=1*$stNo;
$mojstr0ALL = "/usr/bin/php5 gx0ALL.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr0ALL);

$station=10*$stNo;
$mojstr1BPW = "/usr/bin/php5 gx1BPW.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr1BPW);

$station=100*$stNo;
$mojstr2BWS = "/usr/bin/php5 gx2BWS.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr2BWS);

$station=1000*$stNo;
$mojstr3BHS = "/usr/bin/php5 gx3BHS.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr3BHS);

$station=10000*$stNo;
$mojstr4BRS = "/usr/bin/php5 gx4BRS.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr4BRS);

$station=100000*$stNo;
$mojstr5BRS = "/usr/bin/php5 gx5BRS.php ".$station." ".$ido1." ".$ido2." ".$L." ".$lgn;
exec($mojstr5BRS);


?>
<?php  if($measure_time[$stNo]>$tm2s){?>

                         <!-- ÁLLOMÁS TÁBLA: -->
                  <table width="29" border="0"  cellpadding="1" >
             <tr align="left" height="35"   <?php  echo $bgclr;?>>        

  <td colspan="5"     >


<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=0#tocI")?>' title='<?php   //echo $Grafikonmegtek." ".$ido1." - ".$ido2 ;?>' >
<img  src="<?php   echo '../IMG1/'.$stNo.'.png?q='.time();?>" border="0" width=120" height="45"  usemap="#gomb<?php  echo $stNo;?>">
<map name="gomb<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 120, 45"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'.png?q='.time(); ?>  width=600 height=300 >')" >
</map><br>

<?php   print($stNo);?> <?php  print($rowS[st_Ort]);?></a><br>  </td>

<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>

            
                      <td height="20" align="left" <?php   if($qRaino==="h") echo 'bgcolor="#ffffff"'; if($qRaino==="m") echo 'bgcolor="#f6cece"'; ?>>


<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=1#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'0.png?q='.time();?>" border="0"width=120" height="45" usemap="#gomb0<?php  echo $stNo;?>">
<map name="gomb0<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'0.png?q='.time(); ?> width=600 height=300 >')" >
</map>

<?php   print($Csi_Cst);?></td>
		      <td width="65" height="20" align="right"  title="<?php  echo $Csicsapadék ;?>" >

<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>



<?php  if($stNo>9535 && $stNo<9540 ){?>
                   
                      <td width="64" height="20" align="left"   >

<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=2#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'00.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0"width=120" height="45"<?php  //echo $wh01;?> usemap="#gomb00<?php  echo $stNo;?>">
<map name="gomb00<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'00.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php  print($Wnd_wDr);?></td>
                    
<?php  }?><?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>


                    
                      <td width="64" height="20" align="left" <?php   if($qHGTno==="h") echo 'bgcolor="#ffffff"'; if($qHGTno==="m") echo 'bgcolor="#f6cece"'; ?> >
 

<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=3#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'000.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0"width=120" height="45"<?php  //echo $wh01;?> usemap="#gomb000<?php  echo $stNo;?>">
<map name="gomb000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php   print($Lhõ_Pta);?></td>
                    
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

                
                      <td width="64" height="20" align="left"  <?php   if($qFBSno==="h") echo 'bgcolor="#ffffff"'; if($qFBSno==="m") echo 'bgcolor="#f6cece"'; ?>>


<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=4#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'0000.png?q='.time();?>" border="0"width=120" height="45" usemap="#gomb0000<?php  echo $stNo;?>">
<map name="gomb0000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'0000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php   print($Uhõ_Fpt);?></td>
                   
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>


<?php   $sSp=$surf_salt_pri[$stNo];  // PZ2518: na -10C javlja led, a nije: razrada algoritma za CaCl
if($sSp>30) $sSp=30+($sSp-30)/10 ?>

                   
                      <td width="64" height="20" align="left" >

<a href='<?php  print ("$INDEX&dd=$stNo&cty=$cty&cmd=4&ido1=$ido1&ido2=$ido2&GSW=5#tocI")?>'>
<img  src="<?php   echo '../IMG1/'.$stNo.'00000.png?q='.time();// echo $L.'/megnezem'.$L.'.gif';?>" border="0"width=120" height="45"<?php  //echo $wh01;?> usemap="#gomb00000<?php  echo $stNo;?>">
<map name="gomb00000<?php  echo $stNo;?>">
<area shape="rect" coords="0, 0, 40, 15"   onmouseover="this.T_LEFT=true;
 return escape('<img name=slika src=<?php  echo $hE.'/IMG1/'.$stNo.'00000.png?q='.time(); ?> width=600 height=300 > ')" >
</map>

<?php   print($Vté_Upá);?></td>
		    
<?php  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>

          </tr>                  </table>  <!-- ÁLLOMÁS TÁBLA vége -->
<?php  } ?>
<?php  } /// measure END

?>
