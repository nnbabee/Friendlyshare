<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">
    <link rel="canonical" href="https://befonts.com/big-john-pro-typeface.html" >

    <link rel="stylesheet" type="text/css" href="css\postapp.css">
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

    <div class="descripbox">
        <div class="container">
            <div class="boxtopic_area">
                <div>
                    <h1 style="position: absolute;left: 470px;top: 75px"><font size = "5" color = "#32b998">TOPIC</font></h1>
                    <h1 style="position: absolute;left: 470px;top: 120px"><font size = "4" color = "#ffffff">TAG
                    </font></h1>
                    <h1 style="position: absolute;left: 470px;top: 150px"><font size = "4" color = "#ffffff">MEMBERS : </font></h1>
                    <h1 style="position: absolute;left: 470px;top: 180px"><font size = "4" color = "#ffffff">BRAND : </font></h1>
                    <h1 style="position: absolute;left: 470px;top: 210px"><font size = "4" color = "#ffffff">DATE : </font></h1>
                </div>
                
                <!--date-->
                <div>
                    <h3 id="id03" style="position: absolute;left: 455px;top: 250px;color: white"><font size = "2">time</font></h3>
                    <script>
                        var element = document.getElementById("id03");
                        element.innerHTML = Date();
                    </script>
                </div>
            </div>

            <!--descrip-->
            <div class="box_area">
                <h1 style="position: absolute;left: 470px;top: 300px"><font size = "5" color="black">MORE DESCRIPTIONS</font></h1>
                <form method="POST" action="backend\post_back.php">
                    <!--tag number-->
                    <div style="position:absolute;width: 450px;color: #32b998;left: 527px;top: 155px;">
                        <a><select name="tag" type="submit" style="width: 60%;color: white;background-color: #32b998">
                            <option value="tag" selected disabled>tags</option>
                            <option value="food">food</option>
                            <option value="media">media</option>
                            <option value="car">car</option>
                        </select></a>
                    </div>

                    <!--input members-->
                    <div style="position:absolute;width: 450px;color: #32b998;left: 587px;top: 183px;">
                        <a><select name="member" type="int" style="width: 60%;color: white;background-color: #32b998">
                            <option value="0" selected disabled>persons</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select></a>
                    </div>
                    <input style="position:absolute;width: 350px;color: #32b998;left: 567px;top: 213px;background-color: black" type="text" name="title" value=""><br>
                    <textarea style="position:absolute;width: 450px;height: 250px;left: 470px;top: 370px;" name="content" id="" cols="30" rows="10" placeholder=""></textarea>
                    <button  type="submit" style="position:absolute;width: 100px;height: 70px;left: 680px;top: 630px;><font size = "5">POST</font></button><br> 
                    

                </form>
                
            </div>
        </div>
    </div>

    
</body>
</html>