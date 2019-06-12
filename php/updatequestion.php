<?php
require "conn.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['update']))
{
    for ($x = 1; $x <= 15; $x++) {

        $question = $_POST[q.$x];
        $answer1 = $_POST[q.$x.a1];
        $answer2 = $_POST[q.$x.a2];
        $answer3 = $_POST[q.$x.a3];

        $sql   = "UPDATE questions SET questiondescription = '$question', answer1 = '$answer1', answer2 = '$answer2', answer3 = '$answer3' WHERE questionid = '$x'";

        if (!mysqli_query($con,$sql)) {
            echo "Record could not be added.";
            die('Error: ' . mysql_error());
        }

        header( 'Location: /dashboard.html' );

    }         
}
?>
