<?php
require "conn.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login']))
{
        $user_name = $_POST["hostusername"];
        $user_pass = $_POST["hostpassword"];
        $mysql_query = "select * from admin where username = '$user_name' and password = '$user_pass';";
        $result = mysqli_query($con, $mysql_query);
        if(mysqli_num_rows($result) > 0) {
                echo "Login success";
                header( 'Location: /dashboard.html' );
        }
        else {
                echo "<html>";
                echo "<head>";
                echo "<script>alert(\"Username does not match with password on database! Please retry!\");</script>";
                echo "<script>window.history.back();</script>";
                echo "</head>";
                echo "<body>";
                echo "<noscript>Username does not match with password on database! Please go back and retry!</noscript>";
                echo "</body>";
                echo "</html>";
        }
}
?>
