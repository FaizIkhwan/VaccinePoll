<?php
$db_name = "vaccine";
$mysql_username = "root";
$mysql_password = "root";  
$server_name = "localhost";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if($conn) {
    echo "Connection success";
}
else {
    echo "Connection not success";
}
?>