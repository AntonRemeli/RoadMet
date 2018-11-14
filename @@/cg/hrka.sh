#!/bin/bash

function hrka
{ 

rm /drv0/html/@/hr/hrka.csv
mysql -h localhost -u root -p8856caca  -D utmet -s < /drv0/html/@/hr/hrka.sql >> /drv0/html/@/hr/hrka.csv
}


#
#	Main cycle
#

while test 1
do

 hrka
    sleep 61
done 
 
 

