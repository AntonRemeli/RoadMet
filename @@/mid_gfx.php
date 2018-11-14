

  <?php  
/*
  while (1)
{
 */


$ido1 = time()-86400+7200;
$ido2 = time()+7200;

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


$query = "SELECT id FROM station_data ";
$res = mysqli_query($sql_connect,$query);


while ( $rows = mysqli_fetch_row($res))
// looping station START:
{
 $station=$rows[0] ;

echo	$station."  ".$ido1."  ".$ido2;
?>
<br>
<img src='<?php    echo "gx2MKA.php"; ?>?dd=<?php   print("$station&ido1=$ido1&ido2=$ido2");?>'  >

<?php  

 }
//looping station END
mysqli_close ($sql_connect);

/*
sleep(60);
}
*/
             ?>
