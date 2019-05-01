<!--{% load static %}-->
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">
    <link rel="canonical" href="https://befonts.com/big-john-pro-typeface.html" >

    <!--<link rel="stylesheet" type="text/css" href="{% static 'css/homeapp.css' %}">-->
    <link rel="stylesheet" href="css\homeapp.css">

</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="applogo">
                <img src="src\logo1.png" alt="">
                <h1><font size = "6" color = "#ffffff">FRIENDLYSHARE</font></h1>
                
                <h style="margin: 0;float: right;font-weight: normal;margin-left: 50px;padding-top: 5px;" ><font size = "5" color = "#ffffff">USERNAME</font></h>  
                <button style="position: absolute;left: 1080px;margin-top: 35px;float: right;padding-top: 10px;"><a href="loginPage.php"><font face size = "3">LOG OUT</font></a></button>
                <a href="profile.php"><img style="margin-top: 0px;float: right;padding-top: 10px;" src="src/propicpost3.png" alt=""></a>
                
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="descripbox">
        <div class="container">
            <div class="boxtopic_area">
                <h1 style="position: absolute;left: 570px;top: 68px"><font size = "5" color = "#32b998">RECOMMEND POST</font></h1>
            </div>

            <!--descrip-->
            <div class="box_area">
                 <div class="post_scroll">
                        <div style="width: 480px; height: 500px; overflow-y: scroll;">
                            <div>
                              <ul class="list-group">
                             <?php
                                include "backend\connect.php";
                                    $sql = "SELECT * FROM post_data";
                                    $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc($result)) {
                                           echo '<a href="commentJoin.php"><li class="list-group-item"><h style="float: left;"><font size = "2">'.$check['title'].'</font></h></a>';
                                           echo '<p><font size = "2">'.$check['content'].'</font></p></li>';
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                            ?>
                           
                            <a href="post.php"><img style="margin: 0;float: left;margin-left: 90px;padding-top: 20px;position: absolute;left: 1100px;top: 530px" src="src\postbutton.png" alt=""></a>
                            <img style="margin: 0;float: left;margin-left: 130px;padding-top: 20px;position: absolute;left: 100px;top: 60px" src="src\filterbar.png" alt=""></a>
                            <img style="margin: 0;float: left;margin-left: 120px;padding-top: 20px;position: absolute;left: 850px;top: 60px" src="src\newfeedbar.png" alt=""></a>

                        </div>      
                    </div>
                
            </div>
        </div>
    </div>    
</body>
</html>