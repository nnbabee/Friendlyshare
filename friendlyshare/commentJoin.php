<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pastPage</title>
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">
    <link rel="canonical" href="https://befonts.com/big-john-pro-typeface.html" >

    <link rel="stylesheet" href="css\commentJoinstyle.css">

</head>
<body>
    <div class="menubar">
        <div class="container">
            <div class="applogo">
                    <a href="index.php"><img src="src/logo1.png" alt=""></a>
                    <h1><font size = "6" color = "#ffffff">FRIENDLYSHARE</font></h1>
            </div>
            <div class="menulog">
                    <a href="profile.php"><img src="src/propicpost3.png" alt=""></a>
                    <?php
                    require 'backend\sess.php';
                    include "backend\connect.php";
                    if(isset($_SESSION['username'])) {
                        $user = $_SESSION['username'];
                        $sql = "SELECT * FROM user_data WHERE username='$user'" ;
                        $result = mysql_query($sql);
                        if($result){
                            $check = mysql_fetch_array($result);
                            echo '<h style="margin: 0;float: right;font-weight: normal;margin-left: 0px; margin-right:100px; padding-top: 20px;" ><font size = "5" color = "#ffffff">'.$check['username'].'</font></h>';
                        }
                            else{
                                echo '<p>ไม่พบข้อมูล</p>';
                            }
                    }else{
                        echo 'ttt';
                    }
                    ?>
                    <button><a href="loginPage.php"><font size = "2">LOG OUT</font></a></button>

            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="groupinfo">
        <div class="container">
            <div class="info_area">
                <img src="src\propicpost1.png" alt="">
                
                <div class="threebutton">
                <form method = "post" action = "backend/join_back.php?id_title=<?php echo $_GET['id_title']; ?>&username=<?php echo $_SESSION['username']; ?> ">
                    <?php
                            include "backend\connect.php";
                            $sql="select * from post_data WHERE id = '{$_GET['id_title']}'";
                            $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo '<p><font size = "4"> '.$check['username'].' </font></p>';
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                    ?>
                    <button><font weight = "bold" size = "2">RATING</font></button><br>
                    <button><font size = "2">JOIN</font></button><br>
                    <button><font size = "2">REPORT</font></button><br>
                </form>
                </div>
            </div>
            <div class="info_area2">
                    <div class="info_h">
                        <img src="src\member1.png" alt=""><br>
                    </div>
                <div style="width: 240px; height: 280px; overflow-y: scroll;">
                    <div class="info_mem">
                    <?php
                            include "backend\connect.php";
                            $sql="select * from member_data WHERE id_title = '{$_GET['id_title']}'";
                            $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo '<img src="src\propicpost2.png" alt="">';
                                           echo '<p><font size = "2">'.$check['username'].'</font></p><br>';
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                    ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="postinfo">
        <div class="container">
            <div class="details_h">
            <h1><font size = "4">DETAILS</font></h1><br>
            <p><font size = "4">FILTERS  :</font></p>
            <?php
                            include "backend\connect.php";
                            $sql="select * from post_data WHERE id = '{$_GET['id_title']}'";
                            $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo '<p><font size = "4"> '.$check['tag'].' <u/font></p><br>';
                                           echo '<p><font size = "4">MEMBERS  :</font></p>';
                                           echo '<p><font size = "4"> '.$check['member'].' <u/font></p><br>';
                                           echo '<p><font size = "4">BRAND  :</font></p>';
                                           echo '<p><font size = "4"> '.$check['title'].' <u/font></p><br>';
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
            ?>
            </div>
            <div class="details_area">
                <img src="src\moredes1.png" alt=""><br>
                <p style = "text-decoration: none;!important"><font size = "4"> 
                <?php
                            include "backend\connect.php";
                            $sql="select * from post_data WHERE id = '{$_GET['id_title']}'";
                            $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo $check['content'];
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                ?></font></p>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="commentbox">
        <div class="container">
            <div class="comment_area">
                <div class="comment_head">
                    <img src="src\comment1.png" alt="">
                    <img src="src\comment2.png" alt="">
                </div>

                <div class="comment_scroll">
                    <div style="width: 235px; height: 400px; overflow-y: scroll;">
                        <?php
                            include "backend\connect.php";
                            $sql="select * from comment_data WHERE id_title = '{$_GET['id_title']}'";
                            $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo '<p><font size = "2"> </font></p>'.$check['comment'].'</font></h></a>';
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                        ?>
                    </div>  
                </div>

                <div class="comment_button">
                        <button id="myBtn"><font size = "6">+</font></button>
                </div>
                  
                <div id="myModal" class="modal">
                <form method = "post" action = "backend/postcomment.php?id_title= <?php echo $_GET['id_title']; ?>">        <!-- Modal content -->
                            <div class="modal-content">
                              <span class="close">&times;</span>
                              <p><font size = "4" color = "32b998">TEXT</font></p>
                              <textarea name="comment" id="" cols="60" rows="15"></textarea><br>
                              <button type = "submit" id="myBtn2"><font size = "2">COMMENT</font></button>
                            </div>
                </form>            
                </div>
                  
                </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>