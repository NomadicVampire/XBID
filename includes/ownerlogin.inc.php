<?php

if(isset($_POST['ownersubmit'])){

    $ownername = $_POST["ownerteamname"];
    $ownerpwd = $_POST["ownerpwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginOwner($conn,$ownername,$ownerpwd);

}
// If user access the page incorrectly then we redirect it to login page
else{
    header("location: ../ownerlogin.php");
    exit();
}