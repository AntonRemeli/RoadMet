
<?


$sql_connect=mysql_connect('127.0.0.1', 'root', '8856caca');
	$sqlret = mysql_select_db('utmet',$sql_connect);

//	$query = "SET CHARACTER SET latin2";
	$query = "SET CHARACTER SET utf8";
	mysql_query($query); 	


// 	Helyszin	A	B	Bejaras	Betonozas	Beuzemeles	Atadas	CEM	L	HRSZ	Postaicim	c	Latitude	Longitude	t4	KOVIZIG	No	Nev	OTT_HGT_Talaj_Szel2	KeritesOldal	AntennaDb	VillKabel	Foldkabel	Almero	N	L2	p1	p2	p3	p4	p5	p6	p7	p8	p9	Ozsalu40es	Ozsalu40Paletta	Ozsalu30as	Ozsalu30Paletta	Ozsalu20as	Ozsalu20Paletta	Betonzsak	BetonzsakPaletta


if($act=="Gmap4.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Beuzemeles>'3' and Beuzemeles<'8' order by No"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Beuzemeles<'3' or Beuzemeles>'8') order by No";}
//if($act=="Gmap4.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Bejaras>'3' and Bejaras<'8' order by Bejaras"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Bejaras<'3' or Bejaras>'8') order by Bejaras";}
if($act=="Gmap8.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Bejaras>'5' and Bejaras<'8' order by Bejaras"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Bejaras<'6' or Bejaras>'8' or Bejaras='') order by Bejaras";}
if($act=="Gmap9.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  order by No";}
if($act=="Gmap5bej.php") {$querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Bejaras>'5' and Bejaras<'8' order by Bejaras"; $querys = "SELECT * FROM VKKI where CEM>0 and CEM<$C2 and (Bejaras<'6' and Bejaras>'3' and Bejaras>'') order by Bejaras";}
if($act=="Gmap5bet.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Betonozas>'3' and Betonozas<'8' order by Betonozas"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Betonozas<'3' or Betonozas>'8') order by Betonozas";}
if($act=="Gmap5ark.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Betonozas>'3' and Betonozas<'8' order by Betonozas"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Betonozas<'3' or Betonozas>'8') order by Betonozas";}
if($act=="Gmap5ark.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Betonozas>'3' and Betonozas<'8' order by No"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Betonozas<'3' or Betonozas>'8') order by Betonozas";}
if($act=="Gmap5beu.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Beuzemeles>'3' and Beuzemeles<'8' order by Beuzemeles"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Beuzemeles<'3' or Beuzemeles>'8') order by Beuzemeles";}
if($act=="Gmap5bez.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2  and Atadas>'3' and Atadas<'8' order by Atadas"; $querys2 = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2 and (Atadas<'3' or Atadas>'7') order by Atadas";}
if($act=="Gmap5csv.php") {$querys = "SELECT * FROM VKKI where CEM>$C1 and CEM<$C2   order by No";// $querys2 = "SELECT * FROM VKKI where CEM>$C2  order by No";
}


$reys = mysql_query($querys);
$reys2 = mysql_query($querys2);
mysql_close ($sql_connect);


if($C1>-1){?>

      // === Format the ELabel contents ===
      function box(colour,text1,text2) {
        return '<div style="width:80px;height:80px;color:'+colour+'"><center><b><small>' +
          text1+'<br>' +
          '<div style="width:40px;height:20px;border:0px solid '+colour+'">&nbsp;<\/div>' +
          text2+'<br>' +
          '<\/b><\/small><\/center></\div>';
      }
<?}?>
