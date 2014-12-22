<?php
header('Access-Control-Allow-Origin: *');
error_reporting(0);

$user = "root";
$pass = "";
$host = "127.0.0.1";
$db ="heritageapp";

$con = mysql_connect($host, $user, $pass);

if(!$con){
  echo mysql_error();
}

mysql_select_db($db);