<html>
<script type="text/javascript">
<?php

include"connect.php";
if(isset($_GET['id_title'])){
    $id_title = $_GET['id_title'];
    $username = $_GET['username'];
    $sql = "SELECT * from post_data WHERE id='{$id_title}'";
    $result = mysql_query($sql);
    $pass = true;
    if($result){
        $result2 = mysql_fetch_assoc($result);
        if($result2['member']==$result2['total_member']){
            echo "alert('can not join');";
            echo 'window.location.replace("../index.php");';
            $pass = false;
        }
        else{
            $sql = "SELECT * from member_data WHERE id_title= '{$id_title}' and username='{$username}'";
            $result = mysql_query($sql);
            $count = mysql_num_rows($result);
            if($count>0){
                echo "alert('can not join');";
                echo 'window.location.replace("../index.php");';
                $pass = false;
            }
        }
    }
    if($pass){
        $total_member = $result2['total_member']+1;
        $sql = "UPDATE `post_data` SET `total_member`= '{$total_member}' WHERE id='{$_GET['id_title']}'";
        $result=mysql_query($sql);
        if(!$result){
            echo mysql_error();
        }
        $sql = "INSERT INTO `member_data`(`id`, `id_title`, `username`) VALUES (null,'{$_GET['id_title']}','{$username}')";
        $result = mysql_query($sql);
        if($result){
            echo "alert('join success');";
            echo 'window.location.replace("../index.php");';
        }
        else{
            echo "alert('join fail');";
            echo 'window.location.replace("../index.php");';
        }
    }
	
}

?>
</script>
</html> 