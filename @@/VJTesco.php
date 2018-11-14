<html>
  <head>
    <title>Upravljačka ploha promjenjivog znaka</title>
    <meta content="">
    <style></style>
  </head>
<?php  $MOD="VJTesco.php";
include "LM.php";
//include "log.php";
?>


  <body>
<h1>Upravljačka ploha promjenjivog znaka</h1>
<table width="800">
<tr><td width="35%" align="center">
<h3>Naredbe:</h3>
<script>document.write("<form name=parancslistaa method=POST action=VJTatesco.php?dd=<?php  echo $dd;?>&usn=<?php  echo $usn;?>&st_ort=<?php  echo $st_ort;?> target=holyIaFrame>")</script>
Lozinka :
<input type="password" name="jelszo" size="22"><br><small><br></small>

Naredba:
<select name=parancsok>
<option value=0 selected>Izaberite ili samo pitajte</option>
<option value=1 style="font-weight: bold;">Automatsko upravljanje znaka</option>
<option value=2 style="font-weight: bold;">Manualno: Poledica.</option>
<option value=3 style="font-weight: bold;">Manualno: Sklizak kolnik!</option>
<option value=4 style="font-weight: bold;">Manualno: Znak isključen.</option>

</select>
<br><br>
<input type="submit" value="SLANJE NAREDBE / UPIT STANJA">
</form>

<script>document.write("<form name=parancslistab method=POST action=VJTbtesco.php?dd=<?php  echo $dd;?>&usn=<?php  echo $usn;?>&st_ort=<?php  echo $st_ort;?> target=holyIbFrame>")</script>
Lozinka :
<input type="password" name="jelszo" size="22"><br><small><br></small>

Naredba:
<select name=parancsok>
<option value=0 selected>Izaberite ili samo pitajte</option>
<option value=1 style="font-weight: bold;">Automatsko upravljanje znaka</option>
<option value=2 style="font-weight: bold;">Manualno: Poledica.</option>
<option value=3 style="font-weight: bold;">Manualno: Sklizak kolnik!</option>
<option value=4 style="font-weight: bold;">Manualno: Znak isključen.</option>

</select>
<br><br>
<input type="submit" value="SLANJE NAREDBE  / UPIT STANJA">
</form>

</td><td align="center">
<h3>Aktualno stanje:</h3>
<script>document.write("<iframe id='holyIaFrame' name='holyIaFrame' style='width: 100%; height: 120px; border: 0px;' src=VJTatesco.php?dd=<?php  echo $dd;?>&usn=<?php  echo $usn;?>&st_ort=<?php  echo $st_ort;?>></iframe>")</script>
<script>document.write("<iframe id='holyIbFrame' name='holyIbFrame' style='width: 100%; height: 120px; border: 0px;' src=VJTbtesco.php?dd=<?php  echo $dd;?>&usn=<?php  echo $usn;?>&st_ort=<?php  echo $st_ort;?>></iframe>")</script>

</td></tr>
</table>
</body>
</html>
