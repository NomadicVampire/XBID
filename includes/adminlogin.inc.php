<?php

if(isset($_POST["submit-login-admin"])){

    $adminEmail = $_POST["Email"];
    $adminPwd = $_POST["Pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginAdmin($conn,$adminEmail,$adminPwd);

}
// If user access the page incorrectly then we redirect it to login page
else{
    header("location: ../adminlogin.php");
    exit();
}