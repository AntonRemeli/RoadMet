
<?php   
$L='hr';
$MOD="..login_os.php";
include "../LM.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CESTAMET [hrvatski cestovno-meteorološki portal]</title>
</head>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<p align="center"><img src="cestamet_logo.gif" title="CESTAMET" alt="CESTAMET" /></p>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">
<strong align="center" style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">OSIJEK</strong><div style="width:344px; height:190px; border:2px solid #CCCCCC;">

<form action="<?php  echo '../'.$USER ;?>" method="GET">

<?php   include "../FormInput.php";?>
 <input type="hidden" name="lgn" value="Osijek">

<div style="width:370px; position:relative; top:35px; left:35px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;">Korisničko ime:</span>
		<input style="padding:3px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" name="usn" size="15"></div><br /><div style="width:370px; margin-left:41px; position:relative; top:35px; left:35px;">
<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold;">Lozinka:</span>
 <input style="padding:3px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#333333;" type="password" name="pwd" size="8"></div><br />
<input style="padding:5px; position:relative; top:50px; left:107px; width:130px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#333333;" type="submit" value="Ulaz [Osijek]"></form></div></td>
  </tr>
</table><br />
<table style="font-family:Arial, Helvetica, sans-serif; font-size:14px; border:solid 2px #CCCCCC;" border="0" align="center" cellpadding="10" cellspacing="0">
  <tr>
    <td colspan="3"><a href="login_bj.php?L=hr"><strong>ULAZ ZA BJELOVAR</strong></a></td>
  </tr>
</table>
<p align="center"><a href="http://www.elektromodul-promet.hr" target="_blank"><img border="0" src="elektromodul-promet_logo.gif" title="Elektromodul-promet d.o.o." alt="Elektromodul-promet d.o.o." /></a></p>
