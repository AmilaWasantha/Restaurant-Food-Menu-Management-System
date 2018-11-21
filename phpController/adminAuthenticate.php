<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 8/2/18
 * Time: 3:43 PM
 */

$username = $_POST["txtUsername"];
$password = $_POST["txtPassword"];

$connection = new mysqli("localhost","root","amila1568","foodmanage",3306);

$resultset = $connection->query("SELECT * FROM `admin` WHERE userName='{$username}' and password='{$password}'");

if ($resultset->num_rows > 0){

    $rowData = $resultset->fetch_row();
    echo ($rowData);
    $encryptedPassword = $rowData[1];

    $result = password_verify($password,$encryptedPassword);

    if ($result){

        session_set_cookie_params(10*60);
        session_start();
        $_SESSION["exists"] =true;
        header("Location: php/admin.php");

    }else{

        header("Location: ../adminDashboard.php");
    }
}else{
    $message = "Username and/or Password incorrect.\\nTry again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script type="text/javascript">
    window.location ="../adminLogin.php"
    </script>
    ';

//    header("Location: addRestaurant.html");
}