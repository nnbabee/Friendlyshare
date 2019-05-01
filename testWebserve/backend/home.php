<html>
<?php

include "connect.php";
if( $_GET["title"] || $_GET["content"] ) {
	$sql = "SELECT * FROM post_data WHERE title='{$title}' and content='{$content}' ";
    echo . $_GET['title']. ;
    echo . $_GET['content']. ;

?>
</html>