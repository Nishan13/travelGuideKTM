<?php
  require_once("dbConnect.php");
  
  $query = "SELECT DISTINCT * FROM place;";

  $result = mysql_query($query);
  $returnArr = array();
  $i = 0;

  while($row = mysql_fetch_array($result)){
    $returnArr[$i] =  $row['category'];
  }

  echo json_encode($returnArr);
