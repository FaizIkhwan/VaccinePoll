<?php

require "conn.php";

$mysql_query = "select * from questions;";
$result = mysqli_query($con, $mysql_query);

$i = 1;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo $i;        
        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[questiondescription]\">";    
        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer1]\">";    
        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer2]\">";    
        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer3]\">";    
        echo "<br>";

        $i++;

    }
    
} 
else {
    echo "0 results";
}

?>