<?php
  require 'conn.php';

  $question = $_POST['question'];
  $answer = $_POST['answer'];

  echo "$question : $answer";

  $save1   = "INSERT INTO 'listOfAnswer' ('question', 'answer') VALUES ('$question', '$answer')";

  $success = $mysqli->query($save1);

  if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);

    echo "unsuccessfully";
  }

  echo "successfully";
?>