<?php
  if(!$_POST){
    die("Oops! There was a problem!");
  }

  $deviceId = $_POST['uid'];
  $placeId = $_POST['']
  $rating = $_POST['rating'];
  $review = $_POST['review'];

  require_once("dbConnect.php");
  
  $query = "INSERT INTO rating VALUES(NULL, $placeId, $deviceId, $rating, '$review');"

  if(!mysql_query($query)){
    die("Oops! Incorrect")
  }

  echo '{"status":"success", "message":"Successull!"}';