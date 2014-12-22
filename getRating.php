 
<?php
  require_once("dbConnect.php");

  if(!($id = $_GET['id'])){
      die("Error!. Supply id");  
  } else {
    //TODO: Apply regex to allow only numeric.
  }

  $query = "SELECT * FROM rating WHERE p_id=$id;";

  $result = mysql_query($query);
  $sum = 0;
  $i = 0;

  while($row = mysql_fetch_array($result)){
    //echo $row['rating'];
    $sum += $row['rating'];
    $i++;
  }

  /*$ret = $sum/$i;
  $fractional = floor($ret);
  $decimal = (round($ret*10)) % 10 ;
  if($decimal > 5){
    $fractional++;
    $decimal = 0;
  } else {
    $decimal = 5;
  }*/
  $return['rating'] = $sum/$i;
  $return['count']  = $i;

echo json_encode($return);
