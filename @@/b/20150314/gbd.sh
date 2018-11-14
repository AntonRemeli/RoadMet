#!/bin/bash

function gbd
{ 

##function gbg
##{ 
########################################################################################################################################## directory files START
for file in `ls -t $1`

do
##	station_jpg=`echo $file | sed "s/\(....................\)\(...\)/\2/g"`
	station_jpg=`echo $file | sed "s/\(....\)\(................\)\(...\)/\3/g"`
	station_num=`echo $file | sed "s/\(....\)\(................\)\(...\)/\1/g"`
##echo $station_jpg "        " $file
##	if [$station_jpg == 'jpg'];  then   mv $1/$file /drv0/html/TescoJPG/$file; echo " WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWXXXXXXXXXXXXXXXXXXXXXX  moved to /drv0/html/TescoJPG/ " $file; fi
##	if [$station_jpg == 'jpg'];  then   echo " WWWW"; fi

##	station_id=`echo $file | sed "s/\(.*\)_\(.*\)/\1/g"`
if [ $station_jpg == 'jpg' ]; then echo $station_jpg "   WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWXXXXXXXXXXXXXXXXXXXXXX  moved to /drv0/html/TescoJPG/   " $file ; rm /drv0/html/TescoJPG/$station_num.jpg; cp $1/$file /drv0/html/TescoJPG/$station_num.jpg; mv $1/$file /drv0/html/TescoJPG/$file; fi

##done 

##}





########################################################################################################################################## directory files START
##for file in `ls -t $1`

##do
##	station_jpg=`echo $file | sed "s/\(....................\)\(...\)/\2/g"`
##echo $station_jpg "        " $file
##	if [$station_jpg == 'jpg'];  then   mv $1/$file /drv0/html/TescoJPG/$file; echo " WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWXXXXXXXXXXXXXXXXXXXXXX  moved to /drv0/html/TescoJPG/ " $file; fi

##done 

##for file in `ls -t $1`

##do
############################################################################################################################################# one file START
	line=0
	datum="''"
	hygrotemp="''"
	csapadek="''"
	uttest="''"
	tapfesz="''"

b="''"	
	measure_time=1

	air_temp=0
	air_dew_temp=0
	rel_hum=0
hgtv=`echo $rel_hum,$air_dew_temp,$air_temp`

 surf_temp="''"
 surf_deep_temp="''"
 surf_freez_temp="''"
 surf_salt_pri="''"
 surf_salt_sat="''"
 surf_condition="''"
surfv=`echo $surf_temp,$surf_deep_temp,$surf_freez_temp,$surf_salt_pri,$surf_salt_sat,$surf_condition`
	
	v0=0
	v1=0
	v2=0
	v3=0
	v4=0
	v5=0
	v6=0
	v7=0
valv=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`
valvis=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	w0=0
	w1=0
	w2=0
	w3=0
	w4=0
	w5=0
	ws=0
windv=`echo $w1,$w2,$w3,$w4,$w5,$ws`


rain_int="''"
surf_water_depth="''"
precip_stat="''"
precip=5
precip_imp_int=0
precip_imp_lng=1
raiv=`echo $b,$b,$b,$precip_imp_int,$precip_imp_lng`
	
AccuV="220"
door_contact="''"
precip_stat1="''"
precip_stat2="''"
precip_stat3="''"
precip_st=`echo $precip_stat1,$precip_stat2,$precip_stat3`
precip_st2=`echo $precip_st`



	station_id=`echo $file | sed "s/\(.*\)_\(.*\)/\1/g"`
let station_id2=station_id
let station_id3=station_id

PVstat=-1
	
	echo "SELECT TRUE;" > $2/boreas.sql 

echo "------------------------------------------------------------------------" $file | sed "s/\(.*\)_\(.*\)/\1/g"

echo "cc---" $file | sed "s/\(.*\)_\(.*\).\(.*\)/\3/g"



###   "00/" soreleje/sorvég "99/x/\n"  megjelölés és kimenet átirányítása a boreas.txt állományba:
cat $1/$file | awk '{ printf("00/%s 99/x/\n", $LN); }' > $2/boreas.txt 

# echo "aaaaaaaaaaaaaaaaa" $LN
###  i=0

for fields in `cat $2/boreas.txt`

	do
###################################################################################################################################### one line START




	    code=`echo $fields | sed "s/\([0-9]\)\/\(.*\)/\1/g"`
##   echo $code  $fields 
#
if [ $station_id == '9221' ]; then if [ $code == '80' ]; then code='81'; fi ; fi
echo $code  $fields 
#
	    case $code in
##################################################################################################################################### one case START
	 
 

00)	dat=$fields

 datum=`echo $dat | sed "s/\(...\)\(........\)\(..\)\(..\)/\2 \3:\4/g"`
 datums=`echo $dat | sed "s/\(...\)\(........\)\(..\)\(..\)\(..\)/\2 \3:\4:\5/g"`

# sec=`echo $dat | sed "s/\(...\)\(........\)\(..\)\(..\)\(..\)/\5/g"`


year=`echo $dat | sed "s/\(...\)\(....\)\(....\)\(..\)\(..\)/\2/g"`

# if [ $sec == '00' ]; then datum=$datums; fi
# if [ $sec == '00' ]; then year=`echo $dat | sed "s/\(...\)\(....\)\(....\)\(..\)\(..\)\(..\)/\2/g"`; fi
if (test $year -gt 20200); then datum=$datums; fi
if (test $year -gt 20200); then year=`echo $dat | sed "s/\(...\)\(....\)\(....\)\(..\)\(..\)\(..\)/\2/g"`; fi


if (test $year -gt 1);  then		measure_time=`date -d "$datum" +"%s"` ; fi

echo "...dat="$dat"...datum ="$datum"...UnixTimeSec="$measure_time "...year="$year


 if (test $year -gt 2020);  then   measure_time=2;  fi


;;



	    08)	hygrotemp=$fields
		
		air_temp=`echo $hygrotemp | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%4.1f", $2/10);};'`
		air_dew_temp=`echo $hygrotemp | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%4.1f", $3/10);};'`
		rel_hum=`echo $hygrotemp | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 65536); else printf("%4.1f", $4/10);};'`
if (test $station_id -eq 9290) ; then  rel_hum=`echo $air_dew_temp`; fi
if (test $station_id -eq 9291) ; then  rel_hum=`echo $air_dew_temp`; fi

hgtv=`echo $rel_hum,$air_dew_temp,$air_temp`

		;;


  	 18)	wind=$fields

		w0=1	    
		w1=`echo $wind | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%i", $2);};'`
		w2=`echo $wind | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 65536); else printf("%i", $3);};'`	
		w3=`echo $wind | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 65536); else printf("%i", $4*10);};'`	 
		w4=`echo $wind | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%i", $5*10);};'`	
		w5=`echo $wind | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%i", $6*10);};'`	

windv=`echo $w1,$w2,$w3,$w4,$w5,$ws`


		;;

  	 78)	snow=$fields
	    
		ws=`echo $snow | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%i", $2);};'`

windv=`echo $w1,$w2,$w3,$w4,$w5,$ws`


		;;


		
	    50)	csapadek=$fields
	    
		precip=`echo $csapadek | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%d", $2);};'`		
		
		precip_imp_int=$precip
		

raiv=`echo $b,$b,$b,$precip_imp_int,$precip_imp_lng`


		;;

				
	    80)	uttest=$fields
	    		
		v6=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%4.1f", $2/1000);};'`
		v5=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%4.1f", $3/1000);};'`		
		v4=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 65536); else printf("%4.1f", $4/1000);};'`		 
		v3=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 65536); else printf("%4.1f", $5/1000);};'`		
		v2=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%4.1f", $6/1000);};'`		
		v1=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 65536); else printf("%4.1f", $7/1000);};'`		
		v0=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($8 == 32639) printf("%u", 65536); else printf("%4.1f", $8/1000);};'`		
		v7=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($9 == 32639) printf("%u", 65536); else printf("%4.1f", $9/1000);};'`
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($12 == 32639) printf("%u", 65536); else printf("%4.1f", $12/10);};'`
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($14 == 32639) printf("%u", 65536); else printf("%4.1f", $14/10);};'`

surfv=`echo $surf_temp,$surf_deep_temp,$b,$b,$b,$b`
valv=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	if(test $station_id -eq 9170); then let station_id=9199; fi
 if (test $station_id -eq 9035); then let station_id2=9298; fi

		;;

	 79)	uttest=$fields
	    		
		v6=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%4.1f", $2/1000);};'`
		v5=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%4.1f", $3/1000);};'`		
		v4=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 65536); else printf("%4.1f", $4/1000);};'`		 
		v3=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 65536); else printf("%4.1f", $5/1000);};'`		
		v2=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%4.1f", $6/1000);};'`		
		v1=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 65536); else printf("%4.1f", $7/1000);};'`		
		v0=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($8 == 32639) printf("%u", 65536); else printf("%4.1f", $8/1000);};'`		
		v7=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($9 == 32639) printf("%u", 65536); else printf("%4.1f", $9/1000);};'`
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($12 == 32639) printf("%u", 65536); else printf("%4.1f", $12/10);};'`
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($14 == 32639) printf("%u", 65536); else printf("%4.1f", $14/10);};'`

surfv2=`echo $surf_temp,$surf_deep_temp,$b,$b,$b,$b`
valv2=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

		let station_id2=station_id+1
		;;



		
	    81)	uttest=$fields

#		81 / 127 / 32639 / 32639 / 32639 / 32639 / 32639	    

		surf_condition=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%i", $2);};'`
let precip_stat1=$surf_condition
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 0); else printf("%4.1f", $3/10);};'`		
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 0); else printf("%4.1f", $4/10);};'`		 
		surf_freez_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 0); else printf("%4.1f", $5/10);};'`		
		surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%i", $6);};'`
let precip_stat2=$surf_water_depth		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%i", $7);};'`
let precip_stat3=$surf_salt_sat		
		surf_sec_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/40);};'`

precip_st=`echo $precip_stat1,$precip_stat2,$precip_stat3`

#P=10./(1.-(1-($surf_salt_sat+.0074)/250.)*(1-($surf_salt_sat+.0074)/250.))
let p1=75+$surf_salt_sat*1000
let p2=$p1/25
let p3=100000-$p2
#let p4=10000000000-$p3*$p3=200000*$p2-$p2*$p2
let p4=2000*$p2-$p2*$p2/100
let P=1000000000/$p4

#v6=int($P<600.?$P<10.?10:$P:600)
 v6=600
 if (test $P -lt 600); then v6=$P; fi
 if (test $P -lt 10); then v6=10; fi
let v6a=$v6/100
let v6b=($v6-100*$v6a)/10
let v6c=$v6-100*$v6a-10*v6b
v6=`echo $v6a"."$v6b$v6c`

#v5=int($P<13200.?$P<600.?10:$P/22.:600)
# v5=600
# if (test $P -lt 13200); then let v5=$P/22; fi
# if (test $P -lt 600); then v5=10; fi
#let v5a=$v5/100
#let v5b=($v5-100*$v5a)/10
#let v5c=$v5-100*$v5a-10*v5b
$v5=`echo $v5a"."$v5b$v5c`
v5=6

#v4=int($P<13200.?10:$P/280.)
# let v4=$P/280
# if (test $P -lt 13200); then v4=10; fi
#let v4a=$v4/100
#let v4b=($v4-100*$v4a)/10
#let v4c=$v4-100*$v4a-10*v4b
#v4=`echo $v4a"."$v4b$v4c`
v4=6

#let Q=$surf_condition%4
let Q=$surf_condition
let v3=80+10*$Q
let v3a=$v3/100
let v3b=($v3-100*$v3a)/10
let v3c=$v3-100*$v3a-10*v3b
v3=`echo $v3a"."$v3b$v3c`

	
#V=10000./($surf_water_depth+.258)/($surf_water_depth+.258)
let q1=258+$surf_water_depth*100
if (test $surf_water_depth -gt 100); then q1=258+$surf_water_depth/10; fi
let q2=$q1*$q1/1000
let V=10000000/$q2


#v2=int($V<600.?$V<10.?10:$V:600)
 v2=600
 if (test $V -lt 600); then v2=$V; fi
 if (test $V -lt 10); then v2=10; fi
let v2a=$v2/100
let v2b=($v2-100*$v2a)/10
let v2c=$v2-100*$v2a-10*v2b
v2=`echo $v2a"."$v2b$v2c`

#v1=int($V<12000.?$V<600.?10:$V/20.:600)
 v1=600
 if (test $V -lt 12000); then let v1=$V/20; fi
 if (test $V -lt 600); then v1=10; fi
let v1a=$v1/100
let v1b=($v1-100*$v1a)/10
let v1c=$v1-100*$v1a-10*v1b
v1=`echo $v1a"."$v1b$v1c`

#v0=int($V<12000.?10:$V/250.)
 let v0=$V/250
 if (test $V -lt 12000); then v0=10; fi
let v0a=$v0/100
let v0b=($v0-100*$v0a)/10
let v0c=$v0-100*$v0a-10*v0b
v0=`echo $v0a"."$v0b$v0c`

v7=0

valv=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%4.1f", $6/10);};'`		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/10);};'`

surfv=`echo $surf_temp,$surf_deep_temp,$surf_freez_temp,$surf_salt_pri,$surf_salt_sat,$surf_condition`



		let station_id2=station_id
# if (test $station_id -eq 9084); then let station_id2=9284; fi

		;;


	
	    82)	uttest=$fields

#		81 / 127 / 32639 / 32639 / 32639 / 32639 / 32639	    

		surf_condition=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 0); else printf("%i", $2);};'`
let precip_stat1=$surf_condition
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 0); else printf("%4.1f", $3/10);};'`		
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 0); else printf("%4.1f", $4/10);};'`		 
		surf_freez_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 0); else printf("%4.1f", $5/10);};'`		
		surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%i", $6);};'`
let precip_stat2=$surf_water_depth		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%i", $7);};'`
let precip_stat3=$surf_salt_sat		
		surf_sec_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/40);};'`

precip_st2=`echo $precip_stat1,$precip_stat2,$precip_stat3`

#P=10./(1.-(1-($surf_salt_sat+.0074)/250.)*(1-($surf_salt_sat+.0074)/250.))
 if (test $surf_salt_sat -lt 0); then surf_salt_sat=0; fi
let p1=75+$surf_salt_sat*1000
let p2=$p1/25
let p3=100000-$p2
#let p4=10000000000-$p3*$p3=200000*$p2-$p2*$p2
let p4=2000*$p2-$p2*$p2/100
let P=1000000000/$p4

#v6=int($P<600.?$P<10.?10:$P:600)
 v6=600
 if (test $P -lt 600); then v6=$P; fi
 if (test $P -lt 10); then v6=10; fi
let v6a=$v6/100
let v6b=($v6-100*$v6a)/10
let v6c=$v6-100*$v6a-10*v6b
v6=`echo $v6a"."$v6b$v6c`

#v5=int($P<13200.?$P<600.?10:$P/22.:600)
# v5=600
# if (test $P -lt 13200); then let v5=$P/22; fi
# if (test $P -lt 600); then v5=10; fi
#let v5a=$v5/100
#let v5b=($v5-100*$v5a)/10
#let v5c=$v5-100*$v5a-10*v5b
$v5=`echo $v5a"."$v5b$v5c`
v5=6

#v4=int($P<13200.?10:$P/280.)
# let v4=$P/280
# if (test $P -lt 13200); then v4=10; fi
#let v4a=$v4/100
#let v4b=($v4-100*$v4a)/10
#let v4c=$v4-100*$v4a-10*v4b
#v4=`echo $v4a"."$v4b$v4c`
v4=6


#let Q=$surf_condition%4
let Q=$surf_condition
let v3=80+10*$Q
let v3a=$v3/100
let v3b=($v3-100*$v3a)/10
let v3c=$v3-100*$v3a-10*v3b
v3=`echo $v3a"."$v3b$v3c`

	
#V=10000./($surf_water_depth+.258)/($surf_water_depth+.258)
let q1=258+$surf_water_depth*100
let q2=$q1*$q1/1000
let V=10000000/$q2


#v2=int($V<600.?$V<10.?10:$V:600)
 v2=600
 if (test $V -lt 600); then v2=$V; fi
 if (test $V -lt 10); then v2=10; fi
let v2a=$v2/100
let v2b=($v2-100*$v2a)/10
let v2c=$v2-100*$v2a-10*v2b
v2=`echo $v2a"."$v2b$v2c`

#v1=int($V<12000.?$V<600.?10:$V/20.:600)
 v1=600
 if (test $V -lt 12000); then let v1=$V/20; fi
 if (test $V -lt 600); then v1=10; fi
let v1a=$v1/100
let v1b=($v1-100*$v1a)/10
let v1c=$v1-100*$v1a-10*v1b
v1=`echo $v1a"."$v1b$v1c`

#v0=int($V<12000.?10:$V/250.)
 let v0=$V/250
 if (test $V -lt 12000); then v0=10; fi
let v0a=$v0/100
let v0b=($v0-100*$v0a)/10
let v0c=$v0-100*$v0a-10*v0b
v0=`echo $v0a"."$v0b$v0c`

v7=0

valv2=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%4.1f", $6/10);};'`		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/10);};'`

surfv2=`echo $surf_temp,$surf_deep_temp,$surf_freez_temp,$surf_salt_pri,$surf_salt_sat,$surf_condition`
		

		let station_id2=station_id+1

 if [$surf_water_depth == '']; then let station_id2=station_id    ; fi


echo "2222222222222222..................station_id = " $station_id ".....station_id2 = " $station_id2
		;;

		
	    83)	uttest=$fields

#		81 / 127 / 32639 / 32639 / 32639 / 32639 / 32639	    

		surf_condition=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%i", $2);};'`
let precip_stat1=$surf_condition
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 0); else printf("%4.1f", $3/10);};'`		
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 0); else printf("%4.1f", $4/10);};'`		 
		surf_freez_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 0); else printf("%4.1f", $5/10);};'`		
		surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%i", $6);};'`
let precip_stat2=$surf_water_depth		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%i", $7);};'`
let precip_stat3=$surf_salt_sat		
		surf_sec_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/40);};'`

precip_st=`echo $precip_stat1,$precip_stat2,$precip_stat3`

#P=10./(1.-(1-($surf_salt_sat+.0074)/250.)*(1-($surf_salt_sat+.0074)/250.))
let p1=75+$surf_salt_sat*1000
let p2=$p1/25
let p3=100000-$p2
#let p4=10000000000-$p3*$p3=200000*$p2-$p2*$p2
let p4=2000*$p2-$p2*$p2/100
let P=1000000000/$p4

#v6=int($P<600.?$P<10.?10:$P:600)
 v6=600
 if (test $P -lt 600); then v6=$P; fi
 if (test $P -lt 10); then v6=10; fi
let v6a=$v6/100
let v6b=($v6-100*$v6a)/10
let v6c=$v6-100*$v6a-10*v6b
v6=`echo $v6a"."$v6b$v6c`

#v5=int($P<13200.?$P<600.?10:$P/22.:600)
# v5=600
# if (test $P -lt 13200); then let v5=$P/22; fi
# if (test $P -lt 600); then v5=10; fi
#let v5a=$v5/100
#let v5b=($v5-100*$v5a)/10
#let v5c=$v5-100*$v5a-10*v5b
#v5=`echo $v5a"."$v5b$v5c`
v5=6

#v4=int($P<13200.?10:$P/280.)
# let v4=$P/280
# if (test $P -lt 13200); then v4=10; fi
#let v4a=$v4/100
#let v4b=($v4-100*$v4a)/10
#let v4c=$v4-100*$v4a-10*v4b
#v4=`echo $v4a"."$v4b$v4c`
v4=6


#let Q=$surf_condition%4
let Q=$surf_condition
let v3=80+10*$Q
let v3a=$v3/100
let v3b=($v3-100*$v3a)/10
let v3c=$v3-100*$v3a-10*v3b
v3=`echo $v3a"."$v3b$v3c`

	
#V=10000./($surf_water_depth+.258)/($surf_water_depth+.258)
let q1=258+$surf_water_depth*100
if (test $surf_water_depth -gt 100); then q1=258+$surf_water_depth/10; fi
let q2=$q1*$q1/1000
let V=10000000/$q2


#v2=int($V<600.?$V<10.?10:$V:600)
 v2=600
 if (test $V -lt 600); then v2=$V; fi
 if (test $V -lt 10); then v2=10; fi
let v2a=$v2/100
let v2b=($v2-100*$v2a)/10
let v2c=$v2-100*$v2a-10*v2b
v2=`echo $v2a"."$v2b$v2c`

#v1=int($V<12000.?$V<600.?10:$V/20.:600)
 v1=600
 if (test $V -lt 12000); then let v1=$V/20; fi
 if (test $V -lt 600); then v1=10; fi
let v1a=$v1/100
let v1b=($v1-100*$v1a)/10
let v1c=$v1-100*$v1a-10*v1b
v1=`echo $v1a"."$v1b$v1c`

#v0=int($V<12000.?10:$V/250.)
 let v0=$V/250
 if (test $V -lt 12000); then v0=10; fi
let v0a=$v0/100
let v0b=($v0-100*$v0a)/10
let v0c=$v0-100*$v0a-10*v0b
v0=`echo $v0a"."$v0b$v0c`

# v7=0
##  NEM KELL, BPW HASZNAALJA>
##  valv=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%4.1f", $6/10);};'`		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/10);};'`

surfv=`echo $surf_temp,$surf_deep_temp,$surf_freez_temp,$surf_salt_pri,$surf_salt_sat,$surf_condition`



		let station_id2=station_id
# if (test $station_id -eq 9084); then let station_id2=9384; fi

		;;


		
	    84)	uttest=$fields

#		81 / 127 / 32639 / 32639 / 32639 / 32639 / 32639	    

		surf_condition=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%i", $2);};'`
let precip_stat1=$surf_condition
		surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 0); else printf("%4.1f", $3/10);};'`		
		surf_deep_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 0); else printf("%4.1f", $4/10);};'`		 
		surf_freez_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 0); else printf("%4.1f", $5/10);};'`		
		surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%i", $6);};'`
let precip_stat2=$surf_water_depth		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%i", $7);};'`
let precip_stat3=$surf_salt_sat		
		surf_sec_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/40);};'`

precip_st2=`echo $precip_stat1,$precip_stat2,$precip_stat3`

#P=10./(1.-(1-($surf_salt_sat+.0074)/250.)*(1-($surf_salt_sat+.0074)/250.))
let p1=75+$surf_salt_sat*1000
let p2=$p1/25
let p3=100000-$p2
#let p4=10000000000-$p3*$p3=200000*$p2-$p2*$p2
let p4=2000*$p2-$p2*$p2/100
let P=1000000000/$p4

#v6=int($P<600.?$P<10.?10:$P:600)
 v6=600
 if (test $P -lt 600); then v6=$P; fi
 if (test $P -lt 10); then v6=10; fi
let v6a=$v6/100
let v6b=($v6-100*$v6a)/10
let v6c=$v6-100*$v6a-10*v6b
v6=`echo $v6a"."$v6b$v6c`

#v5=int($P<13200.?$P<600.?10:$P/22.:600)
# v5=600
# if (test $P -lt 13200); then let v5=$P/22; fi
# if (test $P -lt 600); then v5=10; fi
#let v5a=$v5/100
#let v5b=($v5-100*$v5a)/10
#let v5c=$v5-100*$v5a-10*v5b
$v5=`echo $v5a"."$v5b$v5c`
v5=6

#v4=int($P<13200.?10:$P/280.)
# let v4=$P/280
# if (test $P -lt 13200); then v4=10; fi
#let v4a=$v4/100
#let v4b=($v4-100*$v4a)/10
#let v4c=$v4-100*$v4a-10*v4b
#v4=`echo $v4a"."$v4b$v4c`
v4=6


#let Q=$surf_condition%4
let Q=$surf_condition
let v3=80+10*$Q
let v3a=$v3/100
let v3b=($v3-100*$v3a)/10
let v3c=$v3-100*$v3a-10*v3b
v3=`echo $v3a"."$v3b$v3c`

	
#V=10000./($surf_water_depth+.258)/($surf_water_depth+.258)
let q1=258+$surf_water_depth*100
if (test $surf_water_depth -gt 100); then q1=258+$surf_water_depth/10; fi
let q2=$q1*$q1/1000
let V=10000000/$q2


#v2=int($V<600.?$V<10.?10:$V:600)
 v2=600
 if (test $V -lt 600); then v2=$V; fi
 if (test $V -lt 10); then v2=10; fi
let v2a=$v2/100
let v2b=($v2-100*$v2a)/10
let v2c=$v2-100*$v2a-10*v2b
v2=`echo $v2a"."$v2b$v2c`

#v1=int($V<12000.?$V<600.?10:$V/20.:600)
 v1=600
 if (test $V -lt 12000); then let v1=$V/20; fi
 if (test $V -lt 600); then v1=10; fi
let v1a=$v1/100
let v1b=($v1-100*$v1a)/10
let v1c=$v1-100*$v1a-10*v1b
v1=`echo $v1a"."$v1b$v1c`

#v0=int($V<12000.?10:$V/250.)
 let v0=$V/250
 if (test $V -lt 12000); then v0=10; fi
let v0a=$v0/100
let v0b=($v0-100*$v0a)/10
let v0c=$v0-100*$v0a-10*v0b
v0=`echo $v0a"."$v0b$v0c`

# v7=0

##  NEM KELL, BPW HASZNAALJA>
## valv2=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`

	surf_water_depth=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 0); else printf("%4.1f", $6/10);};'`		
		surf_salt_sat=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($7 == 32639) printf("%u", 0); else printf("%4.1f", $7/10);};'`

surfv2=`echo $surf_temp,$surf_deep_temp,$surf_freez_temp,$surf_salt_pri,$surf_salt_sat,$surf_condition`



		let station_id2=station_id+1
# if (test $station_id -eq 9084); then let station_id2=9384; fi

		;;




  	 30)	uttest=$fields
	    
	surf_temp=`echo $uttest | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%4.1f", $2/10);};'`		

surfv=`echo $surf_temp,$b,$b,$b,$b,$b`

		;;




  	 01)	tapfesz=$fields
	    
		AccuV=`echo $tapfesz | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%4.1f", $2/10);};'`	    

		
		case $precip in
		
		0) precip_imp_int=0 ;;
		
		1) precip_imp_int=1 ;;
		
		2) precip_imp_int=-0.01 ;;
		
		3) precip_imp_int=0.01 ;;
		
		esac 

 raiv=`echo $b,$b,$b,$precip_imp_int,$precip_imp_lng`

 precip=5 
	;;


  	 40)	what=$fields
PVstat=`echo $what | sed "s/\(....\)\(..\)/\2/g"`
	vsbty=0
		;;


  	 /)	slsl=$fields
	  ((vsbty++))  
		;;

  	 //)	slsl2=$fields
	   ((vsbty++)) 
		;;

  	 ///)	slsl3=$fields
	    ((vsbty++))
		;;

  	 ////)	slsl4=$fields
	    ((vsbty++))
		;;

  	 /////)	slsl5=$fields
	    ((vsbty++))
		;;

	 41)	bpwd=$fields
	    
		v7=-2
		v2=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($2 == 32639) printf("%u", 65536); else printf("%4.2f", ($2-1)/100);};'`
		v3=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($3 == 32639) printf("%u", 65536); else printf("%4.2f", $3/100);};'`
		v4=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($4 == 32639) printf("%u", 65536); else printf("%4.2f", $4/100);};'`
		v5=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 65536); else printf("%4.2f", $5/100);};'`
		v6=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%4.2f", $6/100);};'`	
# valv=`echo $v7,$v6,$v5,$v4,$v3,$v2`

valv=`echo $v7,$v6,$v5,$v4,$v3,$v2,$v1,$v0`
		precip_imp_lng=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($5 == 32639) printf("%u", 65536); else printf("%i", $5);};'`
		precip_imp_int=`echo $bpwd | awk 'BEGIN {FS = "/"}; {if ($6 == 32639) printf("%u", 65536); else printf("%i", $6);};'`	

 raiv=`echo $b,$b,$b,$precip_imp_int,$precip_imp_lng`

		;;


###    megjelölt 99\n sorvég:
	    99)  lend=$fields
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~"	

###    ((i++))


###  elsõ fõállomás adatainak kiírása az SQL parancsfájlba:  
#
echo "UPDATE last_data SET measure_time=$measure_time WHERE station_id=$station_id;" >> $2/boreas.sql

hgtn=`echo rel_hum,air_dew_temp,air_temp`

surfn=`echo surf_temp,surf_deep_temp,surf_freez_temp,surf_salt_pri,surf_salt_sat,surf_condition`

valn=`echo Value_7,Value_6,Value_5,Value_4,Value_3,Value_2,Value_1,Value_0`

rain=`echo rain_int,surf_water_depth,precip_stat,precip_imp_int,precip_imp_lng`

accn=`echo AccuV,door_contact,precip_stat1,precip_stat2,precip_stat3`
accv=`echo $AccuV,$b,$precip_st`

windn=`echo wind1,wind2,wind3,wind4,wind5,snow`

##echo "INSERT INTO measure(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id,$measure_time,$hgtv,$surfv,$valv,$raiv,$accv);" >> $2/boreas.sql


  		if test $w0 -eq 0
		then
echo "INSERT INTO S$station_id(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id,$measure_time,$hgtv,$surfv,$valv,$raiv,$accv);" >> $2/boreasS.sql

		else
echo "INSERT INTO S$station_id(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn,$windn) VALUES ($station_id,$measure_time,$hgtv,$surfv,$valv,$raiv,$accv,$windv);" >> $2/boreasS.sql
		fi


echo $station_id,$measure_time,$hgtv,$surfv,$valv,$raiv,$accv,$wind  
echo $station_id,$measure_time,$hgtv,$surfv,$valv,$raiv,$accv,$wind >> $2/boreas1.csv 



###  második alállomás adatainak kiírása az SQL parancsfájlba:
#
 if (test $station_id2 -ne $station_id); then 
{
echo "UPDATE last_data SET measure_time=$measure_time WHERE station_id=$station_id2;" >> $2/boreas.sql

accv2=`echo $AccuV,$b,$precip_st2`

########echo "INSERT INTO measure(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id2,$measure_time,$hgtv,$surfv2,$valv2,$raiv,$accv2);" >> $2/boreas.sql
//echo "INSERT INTO S$station_id2(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id2,$measure_time,$hgtv,$surfv2,$valv2,$raiv,$accv2);" >> $2/boreasS.sql
  echo "INSERT INTO S$station_id2(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id2,$measure_time,$hgtv,$surfv2,$valv,$raiv,$accv2);" >> $2/boreasS.sql

##echo $station_id2,$measure_time,$hgtv,$surfv2,$valv2,$raiv,$accv2 
  echo $station_id2,$measure_time,$hgtv,$surfv2,$valv,$raiv,$accv2 
##echo $station_id2,$measure_time,$hgtv,$surfv2,$valv2,$raiv,$accv2 >> $2/boreas2.csv 
  echo $station_id2,$measure_time,$hgtv,$surfv2,$valv,$raiv,$accv2 >> $2/boreas2.csv 


} ; fi


###  harmadik alállomás adatainak kiírása az SQL parancsfájlba:
#
#if (test $station_id3 -ne $station_id); then 
#{
	## GB.SH DIFFERENCE :
## 
#echo "UPDATE last_data SET measure_time=$measure_time WHERE station_id=$station_id3;" >> $2/boreas.sql

#valvis=`echo $valvis, $visibility, $PVstat`

##echo "INSERT INTO measure(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id3,$measure_time,$hgtv,$surfv2,$valvis,$raiv,$accv2);" >> $2/boreas.sql
#echo "INSERT INTO S$station_id3(station_id,measure_time,$hgtn,$surfn,$valn,$rain,$accn) VALUES ($station_id3,$measure_time,$hgtv,$surfv2,$valvis,$raiv,$accv2);" >> $2/boreasS.sql

#echo $station_id3,$measure_time,$hgtv,$surfv,$valvis,$raiv,$accv   
#echo $station_id3,$measure_time,$hgtv,$surfv,$valvis,$raiv,$accv >> $2/boreas3.csv 

#PVstat=-1
#} ; fi


	    ;;
	  
###.......és a maradék....:

  	 *)	dveh=$fields

	if (test $vsbty -lt 1); then  visibility=`echo $code | awk 'BEGIN {FS = "/"}; { printf("%4.2f", $1/100);};'`;fi


 if (test $vsbty -lt 1); then  echo "...station_id = " $station_id ".....station_id2 = " $station_id2	".....visibility = " $visibility; fi	

	 ((vsbty++)) 


		let station_id3=station_id+2

		;;



################################################################################################################################################# one case END	   
esac  ### , go back to next case:	    

################################################################################################################################################# one line END 	   
done  ### , go back to next line:	
	
############ write file to SQL:
#
#
	echo $station_id : $datum executing SQL query...

	    	mysql -h localhost -u root -p8856caca  -D utmet -s < $2/boreas.sql
##		mysql -h localhost -u root -p8856caca  -D stations -s < $2/boreasS.sql
##                mysql -h localhost -u root -p8856caca  -D atmet -s < $2/boreas.sql
##	    	mysql -h 195.56.65.43 -u root -p8856caca  -D utmet -s < $2/boreas.sql

#	    	mysql -h AR -u root -Ghwer  -D utmet -s < $2/boreas.sql

    		if test $? -eq 0
		then
		    echo $datum $file done.
		    mv  $2/boreas.sql  $2/done/sql/$file.sql
		mysql -h localhost -u root -p8856caca  -D stations -s < $2/boreasS.sql
		    mv  $2/boreasS.sql $2/done/sql/S$file.sql
		    mv $1/$file $2/done/txt/$file
		else
		    echo $datum error executing SQL query!	
	    	    mv  $2/boreas.sql  $2/error/sql/$file.sql	    
		    mv  $2/boreasS.sql $2/error/sql/S$file.sql	    
	    	    mv $1/$file $2/error/txt/$file		    
		fi



############  file written to SQL
################################################################################################################################################## one file END
done  ### , go back to next file:

########################################################################################################################################### directory files END 
}


#
#	Main cycle
#

m_time=2000

while test 1
do
#  gbd $1 $2 > /data1/boreas/gbd.log
#    gbd $1 $2 > /dev/null
 gbd $1 $2
    sleep $3
done 
 
 

