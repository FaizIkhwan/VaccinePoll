<?php
  header("Access-Control-Allow-Origin: *");
  require 'conn.php';
  $questionnum = $_POST["number"];
  $takequestion = "SELECT * FROM questions WHERE questionid = $questionnum;";
  $resultquestion = mysqli_query($con, $takequestion);
  $takereal = mysqli_fetch_row($resultquestion);
  $actualid = $takereal[0];
  $actualquestion = $takereal[1];
  $actualreply1 = $takereal[2];
  $actualreply2 = $takereal[3];
  $actualreply3 = $takereal[4];

  $takeanswer1 = "SELECT * FROM listOfAnswer WHERE question = '$actualquestion' AND answer = '$actualreply1';";
  $numreply1 = mysqli_num_rows(mysqli_query($con, $takeanswer1));
  $takeanswer2 = "SELECT * FROM listOfAnswer WHERE question = '$actualquestion' AND answer = '$actualreply2';";
  $numreply2 = mysqli_num_rows(mysqli_query($con, $takeanswer2));
  $takeanswer3 = "SELECT * FROM listOfAnswer WHERE question = '$actualquestion' AND answer = '$actualreply3';";
  $numreply3 = mysqli_num_rows(mysqli_query($con, $takeanswer3));

  mysqli_free_result($result);
  mysqli_close($con);

  echo "<script>";
  echo "document.getElementById('question";
  echo $actualid;
  echo "').innerHTML = '";
  echo $actualquestion;
  echo "';";
  echo "var ctx";
  echo $actualid;
  echo " = document.getElementById('myChart";
  echo $actualid;
  echo "').getContext('2d');";
  echo "var myChart";
  echo $actualid;
  echo " = new Chart(ctx";
  echo $actualid;
  echo ", {type: 'bar', data: { labels: ['";
  echo $actualreply1;
  echo "', '";
  echo $actualreply2;
  echo "', '";
  echo $actualreply3;
  echo "'], datasets: [{ label: 'Number of Votes', data: [";
  echo $numreply1;
  echo ", ";
  echo $numreply2;
  echo ", ";
  echo $numreply3;
  echo "], backgroundColor: [ 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)' ],";
  echo "borderColor: [ 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)' ], borderWidth: 1 }] },";
  echo "options: { scales: { yAxes: [{ ticks: { beginAtZero: true } }] } } });";
  echo "</script>";
?>
