<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 8/2/18
 * Time: 3:42 PM
 */
session_set_cookie_params(10*60);
session_start();

if (!isset($_SESSION["exists"])){
    session_unset();
    session_destroy();
    header("Location:adminLogin.html");
}
?>
<h1>Homepage</h1>

Click to <a href="php/adminLogOut.php">Logout</a>

