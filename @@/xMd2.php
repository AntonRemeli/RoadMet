

<?php  

error_reporting(0);
//error_reporting(E_ALL);
$gg=0;
//while ($gg<15)
{
echo " \n ".$gg++;
echo " startW \n";


	include "sql_connectMd.php";
//  	ID	name	dataline
 $qLD = mysqli_query($sql_connect,"SELECT  *  FROM  Meteodata.Lastdata order by name ");
$nr=mysqli_num_rows($qLD);
//$nr = mysqli_fetch_row($qLD);

mysqli_close ($sql_connectMd);

echo " $nr done \n ";


while ($rowLD = mysqli_fetch_array($qLD, MYSQLI_ASSOC))
//   looping last_data START
{
//if($sta!="Meteodata.S00501") break;
$stN= $rowLD[name];
$sta="Meteodata.".$stN;
//echo " $sta       ";

include "sql_connectMd.php";
// 	ID	datum	v1	v2	v3	v4	v5	v6	v7	v8	v9	v10	v11	v12	v13	v14	v15	v16	v17	v18	v19	v20	v21	v22	v23	v24	v25	v26	v27	v28	v29	v30	v31	v32
//if($sta=="Meteodata.S00501") 
$qm = mysqli_query($sql_connect,"SELECT * FROM $sta order by -ID limit 1 ");
mysqli_close ($sql_connectMd);
$qmID=mysqli_num_rows($qm);
$row = mysqli_fetch_row($qm);
$qmID=$row[0];
//echo " $qmID .....";

include "sql_connect241.php";
// 	ID	datum	v1	v2	v3	v4	v5	v6	v7	v8	v9	v10	v11	v12	v13	v14	v15	v16	v17	v18	v19	v20	v21	v22	v23	v24	v25	v26	v27	v28	v29	v30	v31	v32
$qs = mysqli_query($sql_connect,"SELECT  *  FROM  $sta  where  ID>$qmID   order by ID ");
$nrs=mysqli_num_rows($qs);
mysqli_close ($sql_connect241);
//if($nrs>0) echo " $sta   ";

include "sql_connectMd.php";

//ok	$qr = mysqli_query($sql_connect,"INSERT INTO $sta (v1) VALUES (77) ");

$n=0;
//while ($r = mysqli_fetch_array($qs, MYSQLI_ASSOC) )
while ($r = mysqli_fetch_row($qs) )
//   looping $sta START
{ 
//ok if($nrs>0 && $n==0)  {echo ".. $sta:  "; echo "$r[ID] - "; echo $r[ID]+$nrs ;}
//ok if($nrs>0 && $n==0)  {echo ".. $sta:  $r[ID] - "; echo $r[ID]+$nrs ;}
if($nrs>0 && $n==0)  {echo "\n.. $sta:  $r[0] - ".$i=$r[0]+$nrs ;}
$n++;
//if($sta=="Meteodata.S00501")	$qr = mysqli_query($sql_connect,"INSERT INTO $sta (datum,v1,v2) VALUES ('$r[datum]',$r[v1],$r[v2]) ");
//if($n>5) break;
$j=0;
while($j<33){
$v[$j]=$r[$j+1];
$j++;
}
//echo $v[1];
//$qr = mysqli_query($sql_connect,"INSERT INTO $sta (datum,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15,v16,v17,v18,v19,v20,v21,v22,v23,v24,v25,v26,v27,v28,v29,v30,v31,v32) VALUES ('$r[datum]',$r[v1],$r[v2],$r[v3],$r[v4],$r[v5],$r[v6],$r[v7],$r[v8],$r[v9],$r[v10],$r[v11],$r[v12],$r[v13],$r[v14],$r[v15],$r[v16],$r[v17],$r[v18],$r[v19],$r[v20],$r[v21],$r[v22],$r[v23],$r[v24],$r[v25],$r[v26],$r[v27],$r[v28],$r[v29],$r[v30],$r[v31],$r[v32]) ");
$qr = mysqli_query($sql_connect,"INSERT INTO $sta SET datum='$v[0]',v1='$v[1]',v2='$v[2]',v3='$v[3]',v4='$v[4]',v5='$v[5]',v6='$v[6]',v7='$v[7]',v8='$v[8]',v9='$v[9]',v10='$v[10]',v11='$v[11]',v12='$v[12]',v13='$v[13]',v14='$v[14]',v15='$v[15]',v16='$v[16]',v17='$v[17]',v18='$v[18]',v19='$v[19]',v20='$v[20]',v21='$v[21]',v22='$v[22]',v23='$v[23]',v24='$v[24]',v25='$v[25]',v26='$v[26]',v27='$v[27]',v28='$v[28]',v29='$v[29]',v30='$v[30]',v31='$v[31]',v32='$v[32]'");

}
$sta="Meteodata.Last_data";
if($n>0) $ql = mysqli_query($sql_connect,"UPDATE $sta SET datum='$v[0]',v1='$v[1]',v2='$v[2]',v3='$v[3]',v4='$v[4]',v5='$v[5]',v6='$v[6]',v7='$v[7]',v8='$v[8]',v9='$v[9]',v10='$v[10]',v11='$v[11]',v12='$v[12]',v13='$v[13]',v14='$v[14]',v15='$v[15]',v16='$v[16]',v17='$v[17]',v18='$v[18]',v19='$v[19]',v20='$v[20]',v21='$v[21]',v22='$v[22]',v23='$v[23]',v24='$v[24]',v25='$v[25]',v26='$v[26]',v27='$v[27]',v28='$v[28]',v29='$v[29]',v30='$v[30]',v31='$v[31]',v32='$v[32]'  where StID='$stN' ") ; 
mysqli_close ($sql_connectMd);
echo "  ".strtotime($v[0]); echo "  ".$v[0]; 
//   looping $sta  END

}
//looping last_data END


//sleep(100);
}

//ok $ql = mysqli_query($sql_connect,"UPDATE $sta SET datum='2011-1-1 1:1:1',v1='$r[v1]',v2='$r[v2]',v3='$r[v3]',v4='$r[v4]',v5='$r[v5]',v6='$r[v6]' where StID='S00501' ") ;
 

 
             ?>
