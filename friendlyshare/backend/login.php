<html>
<?php
require 'sess.php';
include"connect.php";
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user_data WHERE username='$username' and password='$password' ";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	$count = mysql_num_rows($result);
	echo "<script>";
	if($count == 1){
		echo "alert('login success');";
		session_start();
		
		$_SESSION['username']=$row['username'];
	
		$_SESSION['email']=$row['email'];

		echo 'window.location.replace("../index.php");';

	}
	else{
		echo "alert('login fail');";
		echo 'window.location.replace("../loginPage.php");';
	}
	echo "</script>";
}

?>
</html>