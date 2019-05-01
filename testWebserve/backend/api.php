<?php 
    include"connect.php";
    if(isset($_GET['query'])){
        if($_GET['query'] == 'updateSensor'){
            $temp = $_GET['temp'];
            $humid = $_GET['humid'];
            $sql = "UPDATE SmartFarm SET temp = '{$temp}', humid = '{$humid}' WHERE id=1";
            if(mysql_query($sql)){
                echo "update sensordata success";
            }else{
                echo mysql_error();
            }
        }else if($_GET['query'] == 'getData'){
            $sql = "SELECT * FROM SmartFarm WHERE id=1";
            $result = mysql_query($sql);
            if($result){
                $result = mysql_fetch_assoc($result);
                echo "{\"temp\":".$result['temp'];
                echo ",\"humid\":".$result['humid'];
                echo ",\"sw_state\":".$result['sw_status'];
                echo "}";
            }else{
                echo mysql_error();
            }
        }else if($_GET['query'] == 'updateSwitch'){
            $state = $_GET['state'];
            $sql = "UPDATE SmartFarm SET sw_status = {$state} WHERE id=1";
            if(mysql_query($sql)){
                echo "update switch state success";
            }else{
                echo mysql_error();
            }
        }
    }
?>