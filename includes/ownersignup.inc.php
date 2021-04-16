<?php

// Checking that someone just try to register in appropiate way 
if(isset($_POST['submit'])){
    
    $name = $_POST["name"];
    $teamname = $_POST["teamname"];
    $email = $_POST["email"];
    $cont = $_POST["contact"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    // Different errors that can be possible
    if(emptyInputOwnerSignup($name,$teamname,$email,$cont,$password,$confirm_password) !== false){
    header("location: ../owenrsignup.php?error=emptyinput");
    exit();
    }
    if(invalidOwnerUid( $name) !== false){
    header("location: ../owenrsignup.php?error=invaliusername");
    exit();
    }
    if(invalidOwnerEmail($email) !== false){
    header("location: ../owenrsignup.php?error=invalidemail");
    exit();
    }
    if (invalidOwnerContact($cont) !== false) {
        header("location: ../owenrsignup.php?error=invalidContact");
        exit();
    }
    if(OwnerpwdMatch($password, $confirm_password) !== false){
    header("location: ../owenrsignup.php?error=passwordmatchInvalid");
    exit();
    }
    // conn variable is used bcauz we find username is taken or not from database, so it requires connection
    if(OwneruidExists($conn, $teamname, $email) !== false){
    header("location: ../owenrsignup.php?error=teamnametaken");
    exit();
    }

    createOwner($conn,$name,$teamname,$email,$cont,$password); 

}
else{
    // if it not works then we redirect to certain location
    header("location: ../owenrsignup.php");
    exit();
}