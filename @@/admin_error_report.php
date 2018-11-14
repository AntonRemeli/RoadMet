<html>
<head>
<title>UTMET - Szerver</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="js/style" rel="stylesheet" type="text/css">
<body bgcolor="#D3D2B6" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<br>
<div align="center">
<?php  

$MOD="admin_error_report.php";
include "LM.php";
//include "log.php";

$sql_connect=mysqli_connect("localhost","root","temrue","utmet"); if (mysqli_connect_errno())   {   echo "Failed to connect to MySQL: " . mysqli_connect_error();   }


if (isset($_POST['err']))
{
	if ($_POST['err']=="add")
	{		
		$date = date("Y-m-d G:i");
		$time = time();
		$name = "Administrator";
		$county = "Budapest";
		$type = 99;
		$contact = "";
		$description = $_POST['reply'];
		$user = "Admin";
		$dd = 0;		
		$rpy_id = $_POST['id'];
		$query = "INSERT INTO report SET date='$date', time=$time, station_id=$dd, name='$name', county='$county', type=$type, contact='$contact', description='$description', user='$user', reply_to=$rpy_id";
		$res = mysqli_query($sql_connect,$query);
	}
}


if (isset($_GET['err']))
{
	if ($_GET['err']=="rpy")
	{	
		$msg_id = $_GET['id'];
		
	    $query = "SELECT id,time,name,county,contact,description,user,station_id FROM report where id=$msg_id ";
		$res = mysqli_query($sql_connect,$query);
		$rows = mysqli_fetch_row($res);
?>
	<form name="form1" method="post" action="admin_error_report.php<?php  echo $sess?>">

<?php   include "FormInput.php";?>
 	<input type=hidden name=err value="add">
	<input type=hidden name=id value="<?php   echo $msg_id;?>">

            <table width="650" border="1" cellspacing="0" cellpadding="0" bgcolor="EEEDD0">
              <tr bgcolor="#FF9999" class="midgreyBoldCopy"> 
                <td width="241" height="25"><?php   echo $rows[2];?><br><span class="smallgrey">(<?php   echo $rows[4];?>)</span></td>
                <td width="252" height="25"><?php   echo $rows[6];?><br><span class="smallgrey">(<?php   echo $rows[3]." - ".$rows[7];?>)</span></td>
                <td width="149" height="25"><?php   echo date("Y-m-d H:i",$rows[1]);?></td>
              </tr>
              <tr align="left" bgcolor="#FF9999"> 
	      <td height="20" colspan="3" class="smallgreyBold"><?php  echo $Észrevétel;?><br><br> 
                  <?php   echo $rows[5];?>
                  <br>
                  </td>                  	 
              </tr>
              <tr align="right" bgcolor="#FF9999"> 
                <td height="20" colspan="3" class="smallgreyBold">                
                	<textarea name="reply" cols="50" rows="20"></textarea>
                	<br>  
                	<div align=right><input type="submit" name="Submit" value="<?php  echo $Válaszol;?>"></div>	 
               	</td>
              </tr>
	    </table> 


</form>

            <br>
<?php  
	}
}
?>
</div>
<br>	
<table width="710" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr> 
        <td width="10" height="10"><img src="../kepek/corner_lt.gif" width="10" height="10"></td>          
    	<td width="700" height="10" bgcolor="DEDDC0" class="smallgrey"> </td>
        <td width="10" height="10"><img src="../kepek/corner_rt.gif" width="10" height="10"></td>
  </tr>
  <tr bgcolor="DEDDC0"> 
  		<td width="10">&nbsp;</td>
        <td width="400" height="200" align="left" valign="middle" bgcolor="DEDDC0"> 
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr align="center" valign="middle" bgcolor="#D0CEA4">           		                      			
          <td width="100%" height="190" valign="top" class="smallergrey"> <br>
            <?php  
//  id  date  time  station_id  name  county  type  contact  description  user  reply_to  
// 				

$query = "SELECT id,time,name,county,contact,description,user,station_id FROM report where reply_to=0 and  time>$ido1 order by time desc";
$res = mysqli_query($sql_connect,$query);
$num_rows = mysqli_num_rows( $res);
if($num_rows<1){$query = "SELECT id,time,name,county,contact,description,user,station_id FROM report where reply_to=0 and  time>$ido1-86400*7 order by time desc";
$res = mysqli_query($sql_connect,$query);}

				while ($rows = mysqli_fetch_row($res)){
	
					$query1 = "SELECT id,time,name,county,contact,description,user,station_id FROM report where reply_to=$rows[0] ";
				$res1 = mysqli_query($sql_connect,$query1);
				$rows1 = mysqli_fetch_row($res1);
            ?>
            <table width="650" border="1" cellspacing="0" cellpadding="0" bgcolor="EEEDD0">
              <tr bgcolor="#FF9999" class="midgreyBoldCopy"> 
                <td width="241" height="25"><?php   echo $rows[2];?><br><span class="smallgrey">(<?php   echo $rows[4];?>)</span></td>
                <td width="252" height="25"><?php   echo $rows[6];?><br><span class="smallgrey">(<?php   echo $rows[3]." - ".$rows[7];?>)</span></td>
                <td width="149" height="25"><?php   echo date("Y-m-d H:i",$rows[1]);?></td>
              </tr>
              <tr align="left" bgcolor="#FF9999"> 
                <td height="20" colspan="3" class="smallgreyBold"> <?php  echo $Észrevétel;?><br><br> 
                  <?php   echo $rows[5];?>
                  </td>
              </tr>
              <tr align="right" bgcolor="#FF9999"> 
                <td height="20" colspan="3" class="smallgreyBold"> <a href="admin_error_report.php<?php  echo $sess?>&cmd=66&err=rpy&id=<?php   echo $rows[0];?>"><img src="../kepek/valasz.gif" width="100" height="20" border="0"></a></td>
              </tr>
              <tr align="left" bgcolor="#99FF99"> 
	      <td height="20" colspan="3" class="smallgreyBold"><?php  echo $Válasz;?><br> <br>
                 <?php   echo $rows1[5];?>
                </td>
              </tr>
            </table> 
            <br>
            <br>  
            <?php  
          		}
            ?>		
            		         			
            <br>
          </td>
        </tr>
      	</table>
	    </td>
        <td width="10"></td>
        </tr>
        <tr> 
        	<td width="10" height="10" align="right"><img src="../kepek/corner_lb.gif" width="10" height="10"></td>          
    		<td width="700" height="10" bgcolor="DEDDC0" class="smallgrey"> </td>
        	<td width="10" height="10" align="left"><img src="../kepek/corner_rb.gif" width="10" height="10"></td>
        </tr>
      </table>   
<?php  
mysqli_close ($sql_connect);
?>
</body>
</body>	  
</html>

<table>
<td>
<?php  
//if($lgn=='')  
{
//	include "serv+.php"; 
//	include "servAll.php";
//	include "stationAll.php";
}   
?>
</td>
</table>

