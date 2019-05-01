<!--{% load static %}-->
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">
    <link rel="canonical" href="https://befonts.com/big-john-pro-typeface.html" >

    <link rel="stylesheet" type="text/css" href="css\profileapp.css">

    <!--<link rel="stylesheet" type="text/css" href="{% static 'css/profileapp.css' %}">-->
    
</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="applogo">
                    <a href="index.php"><img src="src\logo1.png" alt=""></a>
                <h1><font size = "6" color = "#ffffff">FRIENDLYSHARE</font></h1>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="loginbox">
        <div class="container">
            <div class="box_area">
                <img src="src\profile.png" alt=""><br>
                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="/action_page.php">
                            <div class="imgcontainer">
                                <img src="src\profilepic.png" alt="Avatar" class="avatar">
                            </div>
                            <div>
                                <h2>E-mail : </h2>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <?php
        require 'backend\sess.php';
        include "backend\connect.php";
        if(isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            $sql = "SELECT * FROM user_data WHERE username='$user'" ;
            $result = mysql_query($sql);
            if($result){
                $check = mysql_fetch_array($result);
                $use = $check['username'];
                echo $user;
                echo '<h1 style="position: absolute;left: 650px;top: 370px">'.$check['username'].'</font></h1>';
                echo '<h3 style="position: absolute;left: 600px;top: 455px">'.$check['email'].'</font></h3>';
            }
            else{
                echo '<p>ไม่พบข้อมูล</p>';
            }
        }else{
            echo 'ttt';
        }
        
        
    ?>
    
    
</body>
</html>