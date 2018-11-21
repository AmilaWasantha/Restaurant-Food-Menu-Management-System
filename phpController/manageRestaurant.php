
<?php
$registrationId=$_POST['registrationId'];
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$dayArray=$_POST['days'];
$fromTime=$_POST['fromTime'];
$toTime=$_POST['toTime'];
$availability=$_POST['availability'];
$action=$_POST['action'];

$connection = new mysqli("localhost","root","amila1568","foodmanage",3306);

if(!$connection){
    echo "connection is faill";
    die;
}else{
    if($action=="save"){

        $days= implode(',', $dayArray);

        $result=$connection->query("insert into restaurant values ('{$registrationId}','{$name}','{$address}','{$email}','{$tel}','{$days}','{$fromTime}','{$toTime}','{$availability}')");
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







