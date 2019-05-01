<html>
<script type="text/javascript">
<?php

include"connect.php";

require 'sess.php';


 
if(isset($_POST['title'])){
	$user = $_SESSION['username'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$tag = $_POST['tag'];
	$member = $_POST['member'];
	$sql = "INSERT INTO `post_data`(`id`, `title`, `content`, `tag`, `member`,`username`) VALUES (null,'{$title}','{$content}','{$tag}','{$member}','{$user}')";
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