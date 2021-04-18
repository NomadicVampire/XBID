<?php

if(isset($_POST["submit-login"])){

    $username = $_POST["userign"];
    $pwd = $_POST["userpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn,$username,$pwd);

}
// If user access the page incorrectly then we redirect it to login page
else{
    header("location: ../userlogin.php");
    exit();
}