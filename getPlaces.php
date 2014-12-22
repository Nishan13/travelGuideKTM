<?php
  require_once("dbConnect.php");

  $query = "SELECT * FROM place;";

  $result = mysql_query($query);
  if(!$result){
    echo mysql_error();
  }
  $returnArr = array();
  $i = 0;

$search = array("\n", "\r", "\u", "\t", "\f", "\b");
$replace = array("\\n", "\\r", "\\u", "\\t", "\\f", "\\b");

  while($row = mysql_fetch_array($result)){
    $returnArr[$i]["id"]         = $row['id'];
    $returnArr[$i]["name"]       = $row['name'];
    $returnArr[$i]["category"]   = $row['category'];
    #$json = preg_replace("!\r?\n!", "", $json);
    #$a = preg_replace("!\r?\n!", "", $row['desc']);
    $returnArr[$i]["description"] = ($row['desc']);
    $returnArr[$i]["totalViews"] = $row['totalviews'];
    $returnArr[$i]["coords"]     = $row['coords'];
    $i++;
  }
  //print_r($returnArr);
  echo (json_encode($returnArr));
