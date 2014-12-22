<?php
  require_once("dbConnect.php");

  if(!($cat = $_GET['cat'])){
      die("Error!. Supply Category");  
  } else {
    //TODO: Apply regex to allow only alphanumeric.
  }

  $query = "SELECT * FROM place WHERE category='$cat';";

  $result = mysql_query($query);
  $returnArr = array();
  $i = 0;

  while($row = mysql_fetch_array($result)){
    $returnArr[$i]["id"]         = $row['id'];
    $returnArr[$i]["name"]       = $row['name'];
    $returnArr[$i]["category"]   = $row['category'];
    $returnArr[$i]["decision"]   = $row['desc'];
    $returnArr[$i]["totalViews"] = $row['totalviews'];
    $returnArr[$i]["coords"]     = $row['coords'];
    $i++;
  }

  echo json_encode($returnArr);
