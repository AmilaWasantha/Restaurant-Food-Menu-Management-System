<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 8/2/18
 * Time: 3:43 PM
 */

session_start();
session_unset();
session_destroy();

?>

<h1>Redirecting...!</h1>

<script>

    setTimeout(function(){
        window.location.replace("adminLogin.php");
    },500);

</script>
