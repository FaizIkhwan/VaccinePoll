<?php
require "conn.php";

$mysql_query = "select * from questions;";
$result = mysqli_query($con, $mysql_query);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "questionid: " . $row["questionid"]. " - questiondescription: " . $row["questiondescription"]. " - answer1: " . $row["answer1"]. " - answer2: " . $row["answer2"]. " - answer3: " . $row["answer3"]. "<br>";
    }
} else {
    echo "0 results";
}

?>