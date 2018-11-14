

<?php  

error_reporting(0);
//error_reporting(E_ALL);
	include "sql_connectMd.php";
$gg=9500;
while ($gg<9555)
{
echo " \n ".$gg++;
echo " startW ";
echo $StID="stanice.S0".$gg;
/*ok
// Create a MySQL table in the selected database
mysqli_query($sql_connect,"CREATE TABLE $StID(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
 name VARCHAR(30),
 age INT)")
 or die(mysqli_error());  

echo "Table Created!";
*/


//$ql = mysqli_query($sql_connect,CREATE TABLE 'aaa' (id int(10) unsigned NOT NULL auto_increment ,station_id int(7) NOT NULL default '0',measure_time int(10) unsigned NOT NULL default '0',rel_hum float(6,2) default NULL ,air_dew_temp float(6,2) default NULL ,air_temp float(6,2) default NULL ,surf_temp float(6,2) default NULL ,surf_deep_temp float(6,2) default NULL ,surf_freez_temp float(6,2) default NULL ,surf_salt_pri float(6,2) default NULL ,surf_salt_sat float(6,2) default NULL ,surf_condition float(6,2) default NULL ,Value_7 float(4,2) default NULL ,Value_6 float(4,2) default NULL ,Value_5 float(4,2) default NULL ,Value_4 float(4,2) default NULL ,Value_3 float(4,2) default NULL ,Value_2 float(4,2) default NULL ,Value_1 float(4,2) default NULL ,Value_0 float(4,2) default NULL ,rain_int float(6,2) default NULL ,surf_water_depth float(4,2) default NULL ,precip_stat float(4,2) default NULL ,precip_imp_int float(6,2) default NULL ,precip_imp_lng float(6,2) default NULL ,AccuV float(6,2) default NULL ,door_contact int(4) default NULL ,precip_stat1 int(4) default NULL ,precip_stat2 int(4) default NULL ,precip_stat3 int(4) default NULL ,hum float(6,2) default NULL ,air float(6,2) default NULL ,surft float(6,2) default NULL ,surfdt float(6,2) default NULL ,xps_time datetime NOT NULL ,PRIMARY KEY (id) ,KEY NewIndex2 (station_id) ,KEY NewIndex (measure_time)) ENGINE = MyISAM DEFAULT CHARSET = latin1);
//$ql = mysqli_query($sql_connect,"CREATE TABLE 'stanice'.'aaa' (id int(10) unsigned NOT NULL auto_increment ,station_id int(7) NOT NULL default '0' ,PRIMARY KEY (id)) ENGINE = MyISAM DEFAULT CHARSET = latin1");
//ok $ql = mysqli_query($sql_connect,"CREATE TABLE $StID (id int(10) unsigned NOT NULL auto_increment,PRIMARY KEY(id)) ") or die(mysqli_error()); 
$ql = mysqli_query($sql_connect,"CREATE TABLE $StID (
id int(10) unsigned NOT NULL auto_increment ,
station_id int(7) NOT NULL default '0',
measure_time int(10) unsigned NOT NULL default '0',
datum datetime default NULL,
rel_hum float(6,2) default NULL ,
air_dew_temp float(6,2) default NULL ,
air_temp float(6,2) default NULL ,
surf_temp float(6,2) default NULL ,
surf_deep_temp float(6,2) default NULL ,
surf_freez_temp float(6,2) default NULL ,
surf_salt_pri float(6,2) default NULL ,
surf_salt_sat float(6,2) default NULL ,
surf_condition float(6,2) default NULL ,
Value_7 float(4,2) default NULL ,
Value_6 float(4,2) default NULL ,
Value_5 float(4,2) default NULL ,
Value_4 float(4,2) default NULL ,
Value_3 float(4,2) default NULL ,
Value_2 float(4,2) default NULL ,
Value_1 float(4,2) default NULL ,
Value_0 float(4,2) default NULL ,
rain_int float(6,2) default NULL ,
surf_water_depth float(4,2) default NULL ,
precip_stat float(4,2) default NULL ,
precip_imp_int float(6,2) default NULL ,
precip_imp_lng float(6,2) default NULL ,
AccuV float(6,2) default NULL ,
door_contact int(4) default NULL ,
precip_stat1 int(4) default NULL ,
precip_stat2 int(4) default NULL ,
precip_stat3 int(4) default NULL ,
hum float(6,2) default NULL ,
air float(6,2) default NULL ,
surft float(6,2) default NULL ,
surfdt float(6,2) default NULL ,
xps_time datetime NOT NULL ,
PRIMARY KEY (id) ,
KEY NewIndex2 (station_id) ,
KEY NewIndex (measure_time))
 ENGINE = MyISAM DEFAULT CHARSET = latin1 ") or die(mysqli_error()); 
//break;
sleep(0);
}
mysqli_close ($sql_connectMd);


 

 
             ?>
