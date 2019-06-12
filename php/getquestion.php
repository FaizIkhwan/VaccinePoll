<?php
  header("Access-Control-Allow-Origin: *");
  require 'conn.php';
  $takequestion = "SELECT * FROM questions;";
  $result = mysqli_query($con, $takequestion);
  $initial = [];
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $byrow = [$row["questiondescription"],$row["answer1"],$row["answer2"],$row["answer3"]];
      array_push($initial,$byrow);
    }
  } else {
    echo "0 results";
  }
  echo json_encode($initial);

  mysqli_free_result($result);
  mysqli_close($con);
?>
