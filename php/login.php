<?php
require "conn.php";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login']))
{
	echo " Masuk if ";
    login();
}

function login()
{
	$user_name = $_POST["hostusername"];
	echo "|username: ";
	echo $user_name;
	$user_pass = $_POST["hostpassword"];
	echo "|password: ";
	echo $user_pass;
	mysqli_select_db($con,"admin");
	$mysql_query = "select * from admin where username = '$user_name' and password = '$user_pass';";
	$result = mysqli_query($conn, $mysql_query);
	if(mysqli_num_rows($result) > 0) {
		echo "Login success";
	}
	else {
		echo "Login not success";
	}
}

?>