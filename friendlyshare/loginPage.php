<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loginPage</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{% static 'css\loginPagestyle.css' %}">
    <link rel="stylesheet" href="css\loginPagestyle.css">

    
</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="applogo">
                <img src="src\logo1.png" alt="">
                <h1><font size = "6" color = "#ffffff">FRIENDLYSHARE</font></h1>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="loginbox">
        <div class="container">
            <div class="box_area">
                <img src="src\login.png" alt=""><br>
                <form method="POST" action="backend\login.php">
                        <input name = "username" type="text" placeholder="E-MAIL OR USERNAME" size="3"><br>
                        <input name = "password" type="password" placeholder="PASSWORD" size="3"><br>
                        <button><fon face = "Big John" size = "10">NEXT</font></button><br>
                        <p><font size = "4">NO ACCOUNT YET?</font></p>
                        <div class="registbutt">
                            <button><font size = "3">REGISTER</font></button><br>
                        </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>