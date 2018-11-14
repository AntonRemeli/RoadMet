<html>
  <head>
    <title>TESCO Körhídi VJT táblák online vezerlõközpontja</title>
    <meta content="">
    <style></style>
<script>placeofphp="../TescoVJT/VJTtesco.php"</script>
  </head>
  <body>
<h1>TESCO Körhídi VJT táblák online vezerlõközpontja</h1>
<hr>
<h2>Legfrissebb állapot-visszajelzés:</h2>
<script>document.write("<iframe id='holyIFrame' name='holyIFrame' style='width: 80%; height: 150px; border: 0px;' src=" + placeofphp + "></iframe>")</script>
<hr>
<h2>Adminisztrációs kezelõfelület:</h2>
<script>document.write("<form name=parancslista method=POST action=" + placeofphp + " target=holyIFrame>")</script>
Elõször gépelje be a jelszót:<br>
<input type="password" name="jelszo" size="20"><br>
Majd válassza az azonnal kiküldendõ parancsot:<br>
Parancslista:
<select name=parancsok>
<option value=0 selected>Válasszon</option>
<option value=1 style="font-weight: bold;">Automatikus táblavezérlés</option>
<option value=2 style="font-weight: bold;">Manuális: Úton folyó munkák.</option>
<option value=3 style="font-weight: bold;">Manuális: Csúszós úttest!</option>
<option value=4 style="font-weight: bold;">Manuális: Kép lekapcsolása.</option>

</select>
<br>
<input type="submit" value="Parancs kiküldése"
</form>
</body>
</html>
