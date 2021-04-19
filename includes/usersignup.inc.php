<?php

if (isset($_POST['submit-signup'])) {
    
   
    $userName = $_POST['name'];
    $inGameName = $_POST['ign'];
    $gender = $_POST['gender'];
    $userprofile = $_FILES["userprofile"]["name"];
    $email = $_POST['email']; 
    $contact = $_POST['contact'];
    $experiance = $_POST['experience'];
    $pass = $_POST['pwd'];
    $repass = $_POST['conf-pwd'];
    $basePrice;

    // File Upload variables
    $targetDir = "uploads/";
    $fileName = basename($_FILES["userprofile"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if (emptyInputUserSignup($userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$repass) !== false) {
      header('location: ../usersignup.php?error=emptyinput');
      exit();
    }
    if (invalidName($userName) !== false) {
        header('location: ../usersignup.php?error=invaliduserName');
        exit();
      }
    if (invalidUsername($inGameName) !== false) {
        header('location: ../usersignup.php?error=invalidIGN');
        exit();
      }
    if (invalidUserEmail($email) !== false) {
        header('location: ../usersignup.php?error=invalidEmail');
        exit();
    }
    if (invalidUserContact($contact) !== false) {
        header("location: ../usersignup.php?error=invalidContact");
        exit();
    }
    if (passwordCheck($pass,$repass) !== false) {
        header('location: ../usersignup.php?error=passwordmatchInvalid');
        exit();
      }
    if (IGNExists($conn, $inGameName, $email) !== false) {
        header('location: ../usersignup.php?error=IGNexist');
        exit();
    }
    
    if (file_exists($targetFilePath) && !(in_array($fileType, $allowTypes))) {
        header('location: ../usersignup.php?error=FileNameExist');
        exit();
    }
   

    if ($experiance=='Silver') {
        $basePrice=5;
    }elseif ($experiance=='Gold') {
        $basePrice=10;
    }else{
        $basePrice=20;
    }

    createUser($conn,$userName,$inGameName,$gender,$userprofile,$email,$contact,$experiance,$pass,$basePrice);
}
else {
    header('location: ../usersignup.php');
    exit();
}