	 <script type="text/javascript">

/*
Live Date Script- 
&copy; Dynamic Drive (www.dynamicdrive.com)
For full source code, installation instructions, 100's more DHTML scripts, and Terms Of Use,
visit http://www.dynamicdrive.com
*/

<?php    echo $scrvar; ?>


datum= '<?php   echo date("Y.m.d",time());?> ';
ora= '<?php   echo date("H:i:s",time());?> ';
Uido = "<?php   echo time(); ?>";
var mydate0=new Date()
ido0 = mydate0.getTime();
ido0 = (ido0-ido0%1000)/1000;   //  ido= UnixTime  sec
Udif=((Uido-ido0)-(Uido-ido0)%60)/60;
idoF="";

if(Udif>3) idoF='<br>'+aszo+'  '+Udif+' '+pkv;
if(Udif<-3) idoF='<br>'+aszo+' '+-Udif+' '+psv ;


function getthedate()
{      // getthedate() FUNCTION START:
/*
var mydate=new Date()
var day=mydate.getDay()

idox=Udif;

var cdate=" "+datum+" , "+dayarray[day]+",  "+ora+" <br>UnixTime (sec 1970-tõl): "+idox+"  </div>"

document.all.clock.innerHTML=cdate
*/

var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)     year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)  daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()

var ido = mydate.getTime();
ido = (ido-ido%1000)/1000;   //  ido= UnixTime  sec

if (minutes<=9)   minutes="0"+minutes
if (seconds<=9)  seconds="0"+seconds

<?php    echo $scrdat; ?>

document.all.clock.innerHTML=cdate


//document.getElementById("clock").innerHTML=cdate


}   // getthedate() FUNCTION end.
n=0
setInterval("getthedate()",1000)
n++
</script>

