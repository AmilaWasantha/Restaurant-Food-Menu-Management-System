
<?php
$RestaurantRegistrationId=$_POST['RestaurantRegistrationId'];
$RestaurantName=$_POST['RestaurantName'];
$userNic=$_POST['userNic'];
$fullName=$_POST['fullName'];
$userName=$_POST['userName'];
$password=$_POST['password'];
$action=$_POST['action'];

$connection = new mysqli("localhost","root","amila1568","foodmanage",3306);

if(!$connection){
    echo "connection is faill";
    die;
}else{
    if($action=="save"){
        $result=$connection->query("insert into user values ('{$userNic}','{$RestaurantRegistrationId}','{$fullName}','{$userName}','{$password}','{$RestaurantName}')");
        if($result>0){
            return true;
        }else{
            return false;
        }
    }else{
        if($action=="update") {

            $dayss = implode(',', $dayArray);
            $result = $connection->query("update restaurant set res_name='{$name}', address='{$address}', email='{$email}',tel_no='{$tel}',days='{$dayss}',fromTime='{$fromTime}',toTime='{$toTime}',availability='{$availability}' where reg_id='{$registrationId}'");

            if ($result > 0) {
                return true;
            } else {
                return false;
            }
        }

    }



}







