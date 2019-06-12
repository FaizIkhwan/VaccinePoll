<?php

require "conn.php";

$mysql_query = "select * from questions;";
$result = mysqli_query($con, $mysql_query);

echo "<table border='1'>
<tr>
<th>Question</th>
<th>Choice 1</th>
<th>Choice 2</th>
<th>Choice 3</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["questiondescription"] . "</td>";
        echo "<td>" . $row["answer1"] . "</td>";
        echo "<td>" . $row["answer2"] . "</td>";
        echo "<td>" . $row["answer3"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else {
    echo "0 results";
}

?>