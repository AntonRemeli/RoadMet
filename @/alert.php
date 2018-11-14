<?php  
$MOD="mid_al.php";
include "LM.php";
include "log.php";
?>

 <?php   include("mid_fej.php"); ?>
 <?php   include("mid_dat.php"); ?>



<SCRIPT>


var basePointer = 0;

var row = new Array(256);

var stack = new Array(256);


function dump() {

	var text = "";

	for (i=0; i<basePointer; i++) {

		text += "row["+i+"]="+row[i]+"\r\n";
		text += "stack["+i+"]="+stack[i]+"\r\n\r\n";
	}

	alert(text);
}


function pushQuery(index) {


	switch (index) {

	case 0: break;

	case 1:
	case 2:
	case 3:

		var dot = 0;

		for (i=0; i<basePointer; i++) {

		    if (row[i].indexOf(".") != -1) {

			    dot++;
		    }

		    if (dot > 0) {

			    alert("<?php  echo $Egyérvényesriasztásikritériumban?>");
			return;
		    }

		}

		row[basePointer] = "";
		stack[basePointer] = "";

		var trElem, tdElem;
		var tbodyElem = document.getElementById("myTbody");


		trElem = tbodyElem.insertRow(tbodyElem.rows.length);
   		trElem.className = "tr" + ((basePointer)%2);


	   	tdElem = trElem.insertCell(trElem.cells.length);
   		tdElem.innerHTML = "amikor";
   

   		tdElem.innerHTML += " "+document.criteria.element.options[document.criteria.element.selectedIndex].text;
		stack[basePointer] += " "+document.criteria.element.options[document.criteria.element.selectedIndex].value;
	
   		tdElem.innerHTML += " "+document.criteria.logic.options[document.criteria.logic.selectedIndex].text;
		stack[basePointer] += " "+document.criteria.logic.options[document.criteria.logic.selectedIndex].value;

		if (document.criteria.compare.selectedIndex == 0) {

	   		tdElem.innerHTML += " "+document.criteria.value.value;
			stack[basePointer] += " "+document.criteria.value.value;
		
		}
	   	
		tdElem.innerHTML += " "+document.criteria.compare.options[document.criteria.compare.selectedIndex].text;
		stack[basePointer] += " "+document.criteria.compare.options[document.criteria.compare.selectedIndex].value;

		tdElem.className = "td1";

		if (index != 3) {

	   		tdElem.innerHTML += " "+document.criteria.next.options[document.criteria.next.selectedIndex].text;
			stack[basePointer] += " "+document.criteria.next.options[document.criteria.next.selectedIndex].value;
		} else {

			tdElem.innerHTML += " .";
//			stack[basePointer] += " ;";
			stack[basePointer] += "";
		}

		row[basePointer] = tdElem.innerHTML;

   		tdElem = trElem.insertCell(trElem.cells.length);
		tdElem.className = "td0";
		tdElem.innerHTML = "<?php  echo $zárójelelhelyezése?> <B><A HREF=\"javascript:groupQuery("+basePointer+", 0, 0)\">(</A> <A HREF=\"javascript:groupQuery("+basePointer+", 1, 0)\">)</A><B>";

   		tdElem = trElem.insertCell(trElem.cells.length);
		tdElem.className = "td0";
		tdElem.innerHTML = "<?php  echo $zárójeltörlése?> <B><A HREF=\"javascript:groupQuery("+basePointer+", 0, 1)\">(</A> <A HREF=\"javascript:groupQuery("+basePointer+", 1, 1)\">)</A><B>";

   		tdElem = trElem.insertCell(trElem.cells.length);
		tdElem.className = "td0";
		tdElem.innerHTML = "<?php  echo $kritériumtörlése?> <B><A HREF=\"javascript:popQuery("+basePointer+")\">[X]</A><B>";


		document.criteria.element.selectedIndex = 0;
		document.criteria.logic.selectedIndex = 0;
		document.criteria.compare.selectedIndex = 0;
		document.criteria.next.selectedIndex = 0;
		document.criteria.value.value = "0";
		document.criteria.value.className = "combo";

		basePointer++;

		break;

	}

	//dump();
}



function popQuery(index) {

		var nr = 0;
		var temp = new Array(256);

		document.criteria.description.value = "<?php  echo $Riasztásküldése?> ";
		document.criteria.query.value = "";
	
		var tbodyElem = document.getElementById("myTbody");

		tbodyElem.deleteRow(index);
		
		for (var k=0; k<basePointer; k++) {

			if (k == index) {

				continue;
			}

			tbodyElem.rows[nr].cells[1].innerHTML = "<?php  echo $zárójelelhelyezése?> <B><A HREF=\"javascript:groupQuery("+nr+", 0, 0)\">(</A> <A HREF=\"javascript:groupQuery("+nr+", 1, 0)\">)</A><B>";
			tbodyElem.rows[nr].cells[2].innerHTML = "<?php  echo $zárójeltörlése?> <B><A HREF=\"javascript:groupQuery("+nr+", 0, 1)\">(</A> <A HREF=\"javascript:groupQuery("+nr+", 1, 1)\">)</A><B>";
			tbodyElem.rows[nr].cells[3].innerHTML = "<?php  echo $kritériumtörlése?> <B><A HREF=\"javascript:popQuery("+nr+")\">[X]</A><B>";
			
			stack[nr] = stack[k];
			row[nr] = row[k];

			nr++;
		}

		basePointer--;

		for (var i=0; i<basePointer; i++) {

			if (stack[i] != "") {

				document.criteria.description.value += " "+row[i];
				document.criteria.query.value += " "+stack[i];
			}
		}


		for (var j=0; j<tbodyElem.rows.length; j++) {
   
			trElem = tbodyElem.rows[j];
   			trElem.className = "tr" + (j%2);
		}

		document.criteria.description.value += " .";
		document.criteria.query.value += " TRUE;";

		document.criteria.element.selectedIndex = 0;
		document.criteria.logic.selectedIndex = 0;
		document.criteria.next.selectedIndex = 0;

		document.criteria.value.value = "0";
		document.criteria.value.className = "combo";

		//dump();
}




function groupQuery(index, dir, state) {

	var tbodyElem = document.getElementById("myTbody");

	if (state == 0) { // zarojel elhelyezes

		switch(dir) {

			case 0: row[index] = "("+row[index];

				stack[index] = "("+stack[index];

				tbodyElem.rows[index].cells[0].innerHTML = row[index];
				break;

			case 1: var pos = row[index].lastIndexOf(" ");

				var before = row[index].substring(0, pos);
				var after = row[index].substring(pos, row[index].length);

				row[index] = before+")"+after;



				pos = stack[index].lastIndexOf(" ");

				before = stack[index].substring(0, pos);
				after = stack[index].substring(pos, stack[index].length);

				stack[index] = before+")"+after;

				tbodyElem.rows[index].cells[0].innerHTML = row[index];

				break;

		}

	} else {

		switch(dir) {

			case 0: var pos = row[index].indexOf("(");

				if (pos == -1) {

					alert("<?php  echo $Nincsnyitottzárójel?>");
					return;
				}

				row[index] = row[index].substring(pos+1, row[index].length);

				pos = stack[index].indexOf("(");

				stack[index] = stack[index].substring(pos+1, stack[index].length);

				tbodyElem.rows[index].cells[0].innerHTML = row[index];
				break;

			case 1: var pos = row[index].lastIndexOf(")");

				if (pos == -1) {

					alert("<?php  echo $Nincsbezártzárójel?>");
					return;
				}

				var before = row[index].substring(0, pos);
				var after = row[index].substring(pos+1, row[index].length);

				row[index] = before+after;



				pos = stack[index].lastIndexOf(")");

				before = stack[index].substring(0, pos);
				after = stack[index].substring(pos+1, stack[index].length);

				stack[index] = before+after;

				tbodyElem.rows[index].cells[0].innerHTML = row[index];


				break;
		}
	}
}


function submitQuery() {

	var dot = 0;
	var tbodyElem = document.getElementById("myTbody");
	
	if (document.criteria.phone.value == "") {
	
	    alert("<?php  echo $Nemadottmegtelefonszámot?>");
	    return;
	}

	if (document.criteria.text.value == "") {
	
	    alert("<?php  echo $Nemadottmegriasztásiszöveget?>");
	    return;
	}

	if (document.criteria.text.value.length > 128) {
	
	    alert("<?php  echo $Ariasztásszövegemaximum?>");
	    return;
	}

	if (tbodyElem.rows[tbodyElem.rows.length-1].cells[0].innerHTML.indexOf(".") == -1) {

		alert("Egy érvényes riasztási kritérium ponttal kell végzõdjön.\r\nAz utolsó kritériumot a \"kritérium hozzáadása\" opció kiválasztásával adja meg.");
		return;
	}   

	document.criteria.description.value = "<?php  echo $Riasztás?> \"";
	document.criteria.description.value += document.criteria.text.value;
	document.criteria.description.value += "\" ";	
	document.criteria.description.value += document.criteria.method.options[document.criteria.method.selectedIndex].text;  
	
	if (document.criteria.method.selectedIndex == 1) {
	
	    document.criteria.description.value += document.criteria.phone.value;      
	}
	
	//document.criteria.description.value += "\" küldése a ";
	//document.criteria.description.value += document.criteria.phone.value;  
	//document.criteria.description.value += " telefonszámra ";
	
	document.criteria.query.value = "";
		
	for (i=0; i<basePointer; i++) {

		if (row[i].indexOf(".") != -1) {

			dot++;
		}

		if (dot > 1) {

			alert("<?php  echo $Egyérvényesriasztásikritériumban?>");
			return;
		}

		document.criteria.description.value += " "+row[i];
		document.criteria.query.value += " "+stack[i];
	}

	//document.criteria.description.value += "";
	//document.criteria.query.value += "";

	var criteria = confirm("<?php  echo $AzÖnáltalmegadottriasztásikritérium?>\r\n"+
				document.criteria.description.value+"\r\n<?php  echo $Kívánjaelmenteni?>"); 

	if (criteria == false) return;

	var name = prompt("<?php  echo $Kéremadjamegmilyennévre?>:", "riasztas_");

	if ((name == "") || (name == null)) {
			
		alert("<?php  echo $Kéremadjamegmilyennévre?>!");

		document.criteria.element.selectedIndex = 0;
		document.criteria.logic.selectedIndex = 0;	
		document.criteria.compare.selectedIndex = 0;
		document.criteria.next.selectedIndex = 0;
		//document.criteria.before.value = "mint";
		//document.criteria.after.value = "";
		document.criteria.value.value = "0";
		document.criteria.value.className = "combo";
	} else {
		document.criteria.name.value = name;
		document.criteria.submit();
	}
}


function compareto(index) {

    if (index == 0) {
	document.criteria.value.className = "combo";
    } else {
	document.criteria.value.className = "hidden";    
    }
}

function beforeafter(index) {
/*
	if ((index == 2) || (index == 3)) {

		document.criteria.before.value = "";
		document.criteria.after.value = "-al/el ";
	} else {
		document.criteria.before.value = "mint ";
		document.criteria.after.value = "";
	}	
*/
}



function alert_method(index) {

	document.criteria.method.selectedIndex = index;

	if (index == 1) {
		document.criteria.phone.value = "06201234567";
		document.criteria.phone.className = "input1";
	} else {
		document.criteria.phone.value = "0";
	
		document.criteria.phone.className = "hidden";
	}	

}



</SCRIPT>

<STYLE>
.hidden {background-color:#DEDDC0;
        font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;
	visibility: hidden}

.td0 {text-align:right}

.td1 {font-weight:normal}

.tr0 	{background-color:#DEDDC0;
	font-size: 10px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #333333;
	font-weight: bold;}

.tr1 	{background-color:#E4E3D2;
	font-size: 10px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
        color: #333333;
        font-weight: bold;}

.combo {background-color:#E4E3D2;
        font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;}
	
.input1 {background-color:#DEDDC0;
        font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;}

.input0 {background-color:#DEDDC0;
        font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	font-weight: normal;}

.input {font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 10px;
	color: #333333;
	font-weight: normal;
	background-color:#E4E3D2; border-bottom:#E4E3D2; border-top:#E4E3D2; border-left:#E4E3D2; border-right:#E4E3D2;}
</STYLE>




<FORM NAME="criteria" ACTION="mid_ad.php" METHOD="GET">

<INPUT TYPE="HIDDEN" NAME="query" VALUE=""> 
<INPUT TYPE="HIDDEN" NAME="description" VALUE=""> 
<INPUT TYPE="HIDDEN" NAME="name" VALUE=""> 
<INPUT TYPE="HIDDEN" NAME="dd" VALUE="<?php  print("$station");?>"> 	
 <?php   include("FormInput.php"); ?>


<?php  echo $Riasztás?> <INPUT TYPE="text" NAME="text" VALUE="<?php  echo $szövegg ?>" CLASS="input0" SIZE="29"> 


<SELECT NAME="method" CLASS="input1" onChange="alert_method(document.criteria.method.selectedIndex)">
<OPTION VALUE="local" SELECTED> <?php  echo $lokális ?> </OPTION>    
    <OPTION VALUE="phone"><?php  echo $lokálistelefonszámra ?>
  </OPTION>
</SELECT>

<INPUT TYPE="text" NAME="phone" VALUE="0" CLASS="hidden" SIZE="27"> 

<DIV>
    <TABLE ID="myTable" BGCOLOR="#E4E3D2" WIDTH="100%" BORDER="0">

	<TBODY ID="myTbody">
	</TBODY>

	<THEAD>
        </THEAD>

    </TABLE>
</DIV>
    <TABLE BGCOLOR="#E4E3D2" WIDTH="100%">
	<THEAD>
        <TR>
			<TD>
<?php  echo $amikor ?>
			</TD>
            		<TD>
                		<SELECT NAME="element" CLASS="input">
				    	<OPTION VALUE="$air[$stNo]"><?php  echo $aléghõmérséklet?> </OPTION>
					<OPTION VALUE="$hum[$stNo]"><?php  echo $apáratartalom?> </OPTION>
					<OPTION VALUE="$air_dew_temp[$stNo]"><?php  echo $aharmatpont?> </OPTION>
					<OPTION VALUE="$surft[$stNo]"><?php  echo $azútpályahõmérséklet?> </OPTION>
					<OPTION VALUE="$surf_salt_pri[$stNo]"><?php  echo $avegyitényezõ?> </OPTION>
					<OPTION VALUE="$surf_freez_temp[$stNo]"><?php  echo $afagypont?> </OPTION>
					<OPTION VALUE="$rain_int[$stNo]"><?php  echo $acsapadékintenzitás?> </OPTION>
					<OPTION VALUE="$surf_water_depth[$stNo]"><?php  echo $avízréteg?> </OPTION>
					<OPTION VALUE="$surf_condition[$stNo]"><?php  echo $azútállapot?> </OPTION>
					<!--OPTION VALUE="CST">a csapadék típus </OPTION-->
				</SELECT>
            		</TD>
			<TD>
                		<SELECT NAME="logic" CLASS="combo" onChange="javascript:beforeafter(document.criteria.logic.selectedIndex)">
				    	<OPTION VALUE=">"> <?php  echo $nagyobb?> </OPTION>
					<OPTION VALUE="<"> <?php  echo $kisebb?> </OPTION>
					<OPTION VALUE="=="> <?php  echo $egyenlõ?> </OPTION>
					<OPTION VALUE="<>"> <?php  echo $nemegyenlõ?> </OPTION>
					<OPTION VALUE=">="> <?php  echo $nagyobbvagyegyenlõ?> </OPTION>
					<OPTION VALUE="<="> <?php  echo $kisebbvagyegyenlõ?> </OPTION>
				</SELECT>
            		</TD>
		    	<TD>
				<!--INPUT NAME="before" TYPE="text" VALUE="mint " SIZE="4" CLASS="input"-->	
				<INPUT NAME="value" TYPE="text" VALUE="0 " SIZE="4" CLASS="combo">
				<INPUT NAME="login" TYPE="hidden" VALUE="<?php   echo $lgn ?>">				
			    	<!--INPUT NAME="after" TYPE="text" VALUE="" SIZE="4" CLASS="input"--> 
			</TD>

            		<TD>
                		<SELECT NAME="compare" CLASS="combo" onChange="javascript:compareto(document.criteria.compare.selectedIndex)">
				    	<OPTION VALUE=""><?php  echo $értéknél?></OPTION>
				
				    	<OPTION VALUE="$air[$stNo]"><?php  echo $aléghõmérséklet?><?php  echo $nél?></OPTION>
					<OPTION VALUE="$hum[$stNo]"><?php  echo $apáratartalom?><?php  echo $nál?></OPTION>
					<OPTION VALUE="$air_dew_temp[$stNo]"><?php  echo $aharmatpont?><?php  echo $nál?></OPTION>
					<OPTION VALUE="$surft[$stNo]"><?php  echo $azútpályahõmérséklet?><?php  echo $nél?></OPTION>
					<OPTION VALUE="$surf_salt_pri[$stNo]"><?php  echo $avegyitényezõ?><?php  echo $nél?></OPTION>
					<OPTION VALUE="$surf_freez_temp[$stNo]"><?php  echo $afagypont?><?php  echo $nál?></OPTION>
					<OPTION VALUE="$rain_int[$stNo]t"><?php  echo $acsapadékintenzitás?><?php  echo $nál?></OPTION>
					<OPTION VALUE="$surf_water_depth[$stNo]"><?php  echo $avízréteg?> </OPTION>
					<OPTION VALUE="$surf_condition[$stNo]"><?php  echo $azútállapot?> </OPTION>
					<!--OPTION VALUE="CST">a csapadék típusnál </OPTION-->
				</SELECT>
            		</TD>
			
			<TD>
                		<SELECT NAME="next" onChange="javascript:pushQuery(document.criteria.next.selectedIndex)" CLASS="combo">
				    	<OPTION VALUE="0"><?php  echo $tovább?> </OPTION>
					<OPTION VALUE="AND"><?php  echo $és?></OPTION>
					<OPTION VALUE="OR"><?php  echo $vagy?></OPTION>
					<OPTION VALUE=""><?php  echo $kritériumhozzáadása?></OPTION>
				</SELECT>
			</TD>
			<!--TD ALIGN="right">
				<INPUT TYPE="button" NAME="go" onClick="javascript:submitQuery()" VALUE="mentés">
			</TD-->
        </TR>
	</THEAD>
    </TABLE>
<BR>
<INPUT TYPE="button" NAME="go" onClick="javascript:submitQuery()" VALUE="<?php  echo $mentés?>">
    
<BR>
</FORM>

<SCRIPT>
alert_method(0);
</SCRIPT>

