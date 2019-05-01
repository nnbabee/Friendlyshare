<html>
<script type="text/javascript">
<?php

include"connect.php";
if(isset($_GET['id_title'])){
	$comment = $_POST['comment'];
	$sql = "INSERT INTO `comment_data`(`id`, `id_title`, `comment`) VALUES (null,'{$_GET['id_title']}','{$comment}')";
	$result = mysql_query($sql);
	if($result){
		echo "alert('post success');";
		echo 'window.location.replace("../index.php");';
	}
	else{
		echo "alert('post fail');";
		echo 'window.location.replace("../index.php");';
	}
}

?>
</script>
</html> 