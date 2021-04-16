<?php

if (isset($_POST["submit-login"])) {
    
    $userIGN = $_POST['IGNorEmail'];
    $userPwd = $_POST['user-pwd'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyUserLogin($userIGN, $userPwd) !== false) {
        header('location: ../userlogin.php?error=emptyinput');
        exit();
      }

    loginUser($conn, $userIGN, $userPwd);


}else {
    header("Location: ../userlogin.php?error=buttonNOTclickedLOL");
    exit();
}