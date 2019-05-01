<html>
<script type="text/javascript">
<?php

include"connect.php";
if(isset($_POST['title'])){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$sql = "INSERT INTO `post_data`(`id`, `title`, `content`) VALUES (null,'{$title}','{$content}')";
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