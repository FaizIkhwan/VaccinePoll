<?php
  require 'conn.php';

  $question = $_POST['question'];
  $answer = $_POST['answer'];

  $sql   = "INSERT INTO listOfAnswer (question, answer) VALUES ('$question', '$answer')";

  if (!mysqli_query($con,$sql)) {
    echo "Record could not be added.";
    die('Error: ' . mysql_error());
  }

  echo "1 record added successfully.";
?>
