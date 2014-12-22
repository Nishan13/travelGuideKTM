 
<?php
  require_once("dbConnect.php");

  if(!($id = $_GET['id'])){
      die("Error!. Supply id");  
  } else {
    //TODO: Apply regex to allow only numeric.
  }

  if(!($pid = $_GET['pid'])){
      die("Error!. Supply pid");  
  } else {
    //TODO: Apply regex to allow only numeric.
  }

  $query = "SELECT * FROM rating WHERE u_id=$id AND p_id=$pid;";
  $result = mysql_query($query);
  $sum = 0;
  $i = 0;

  $row = mysql_fetch_array($result);
  
  $return['rating'] = $row['rating'];
  $return['rev']  = $row['review'];

echo json_encode($return);
