#!/bin/bash

function oka
{ 

rm /drv0/html/MKA/oka.csv
mysql -h localhost -u root -p8856caca  -D utmet -s < /drv0/html/MKA/OKA/oka.sql >> /drv0/html/MKA/oka.csv
}


#
#	Main cycle
#

while test 1
do

 oka
    sleep 61
done 
 
 

