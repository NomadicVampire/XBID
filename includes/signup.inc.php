<?php

if (isset($_POST['submit-signup'])) {
    
   
    $userName = $_POST['name'];
    $inGameName = $_POST['ign'];
    $gender = $_POST['gender'];
    $email = $_POST['email']; 
    $contact = $_POST['contact'];
    $experiance = $_POST['experience'];
    $pass = $_POST['pwd'];
    $repass = $_POST['conf-pwd'];
    $basePrice;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputSignup($userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$repass) !== false) {
      header('location: ../userSignup.php?error=emptyinput');
      exit();
    }

    if (invalidUsername($userName) !== false) {
        header('location: ../userSignup.php?error=invalidusername');
        exit();
      }
    if (invalidEmail($email) !== false) {
        header('location: ../userSignup.php?error=invalidEmail');
        exit();
    }
    if (invalidUserContact($contact) !== false) {
        header("location: ../userSignup.php?error=invalidContact");
        exit();
    }
    if (passwordCheck($pass,$repass) !== false) {
        header('location: ../userSignup.php?error=passwordmatchInvalid');
        exit();
      }
    if (IGNExists($conn, $inGameName, $email) !== false) {
        header('location: ../userSignup.php?error=IGNExist');
        exit();
    }

    if ($experiance=='Silver') {
        $basePrice=5;
    }elseif ($experiance=='Gold') {
        $basePrice=10;
    }else{
        $basePrice=20;
    }

    createUser($conn,$userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$basePrice);
}
else {
    header('location: ../userSignup.php');
    exit();
}