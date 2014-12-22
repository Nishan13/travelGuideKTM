<?php
  require_once("dbConnect.php");

  if(!($id = $_GET['id'])){
      die("Error!. Supply id");  
  } else {
    //TODO: Apply regex to allow only numeric.
  }

  $query = "SELECT * FROM place WHERE id=$id;";

  $result = mysql_query($query);
  $sum = 0;
  $i = 0;
  $row = mysql_fetch_array($result); //One 
  //$return["desc"] = $row['desc'];

  /*$ret = $sum/$i;
  $fractional = floor($ret);
  $decimal = (round($ret*10)) % 10 ;
  if($decimal > 5){
    $fractional++;
    $decimal = 0;
  } else {
    $decimal = 5;
  }*/

  echo json_encode($row);
