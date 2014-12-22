<?php

  require_once("dbConnect.php");
  
  if(!($pid = $_GET['pid'])){
    die("Supply, id!");
  } else {
    //TODO: Check if pid is only numeric.
  }

  $sql = "SELECT sentiments.phrase as p, sentiments.score as s FROM sentiments INNER JOIN rating ON rating.p_id=$pid AND LOWER(rating.review) LIKE CONCAT('%',sentiments.phrase,'%')";  

  $res = mysql_query($sql);
  if(!$res){
    echo mysql_error();
  }
  $score = 0;
  $i = 0;
  $flag = true;

  while($row = mysql_fetch_array($res)){
    //Split the review into 
    //echo "A: " + $row['s'];
    //echo $row['s']; 
    //echo "<br>";
    //echo $score;
    //echo " score_old <br>"; 
    $score += $row['s'];
    //echo $score; 
    //echo " score_new <br>";
    $i++;
  }
  //echo $score;
  echo $score/$i;