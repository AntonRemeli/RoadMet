<html>
  <head>
    <title>TESCO K�rh�di VJT t�bl�k online vezerl�k�zpontja</title>
    <meta content="">
    <style></style>
<script>placeofphp="../TescoVJT/VJTtesco.php"</script>
  </head>
  <body>
<h1>TESCO K�rh�di VJT t�bl�k online vezerl�k�zpontja</h1>
<hr>
<h2>Legfrissebb �llapot-visszajelz�s:</h2>
<script>document.write("<iframe id='holyIFrame' name='holyIFrame' style='width: 80%; height: 150px; border: 0px;' src=" + placeofphp + "></iframe>")</script>
<hr>
<h2>Adminisztr�ci�s kezel�fel�let:</h2>
<script>document.write("<form name=parancslista method=POST action=" + placeofphp + " target=holyIFrame>")</script>
El�sz�r g�pelje be a jelsz�t:<br>
<input type="password" name="jelszo" size="20"><br>
Majd v�lassza az azonnal kik�ldend� parancsot:<br>
Parancslista:
<select name=parancsok>
<option value=0 selected>V�lasszon</option>
<option value=1 style="font-weight: bold;">Automatikus t�blavez�rl�s</option>
<option value=2 style="font-weight: bold;">Manu�lis: �ton foly� munk�k.</option>
<option value=3 style="font-weight: bold;">Manu�lis: Cs�sz�s �ttest!</option>
<option value=4 style="font-weight: bold;">Manu�lis: K�p lekapcsol�sa.</option>

</select>
<br>
<input type="submit" value="Parancs kik�ld�se"
</form>
</body>
</html>
