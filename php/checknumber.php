<?php
  header("Access-Control-Allow-Origin: *");
  require 'conn.php';

  $check = "SELECT DISTINCT question FROM listOfAnswer";

  $result = mysqli_query($con,$check);
  $num = mysqli_num_rows($result);

  echo $num;
?>
