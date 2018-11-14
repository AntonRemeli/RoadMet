
<?php  

$sad=time();

$sada =date("Y-m-d",$sad+22)." ".date("H:i",(round(($sad)/60)*60));


$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


	$stno = $_GET['dd'];

$query0 = "SELECT * FROM servs where stno=$stno and kada>'$sada'  ";
$res0 = mysqli_query($sql_connect,$query0);
$num_rows = mysqli_num_rows($res0);

 mysqli_close ($sql_connect);


if($num_rows>0)
{
?>
<tr>
      <td width="2%" align="left">hibaleírás: </td>
      <td width="2%" align="left">tennivaló:</td>
      <td width="2%" align="left">mikor: </td>
</tr>
<?php  

$row=0;
while($row<$num_rows)
{	




$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }

$querys = "SELECT * FROM servs where stno=$stno and kada>'$sada' ";
$ress = mysqli_query($sql_connect,$querys);


$loop=0;
while ($rows = mysqli_fetch_array($ress, MYSQLI_ASSOC))
//$rows = mysqli_fetch_array($res, MYSQLI_ASSOC);
{

if($loop==$row)
{		
$qstxt=$rows[stxt];
$qtodo=$rows[todo];
$qkada=$rows[kada];
}
$loop++;

}
 mysqli_close ($sql_connect);
?>

<tr>
      <td width="2%"><input name="stxt" type="text" size="35" id="stxt" value="<?php  echo $qstxt;?>"></td>
      <td width="2%"><input name="todo" type="text" size="55" id="todo" value="<?php  echo $qtodo;?>"></td>
      <td width="2%"><input name="kada" type="text" size="13" id="kada" value="<?php  echo $qkada;?>"></td>

</tr>

<?php  

$row++;
}
} 
?>



