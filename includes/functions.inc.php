<?php


// signup functions that i included in signup.inc.php file 

function emptyInputSignup($userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$repass){

    $result;
    if (empty($userName) || empty($inGameName) || empty($gender)|| empty($email)|| empty($contact)||empty($pass)|| empty($repass)) {
        $result= true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidUsername($userName){
    $result;
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
      $result=true;
        
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result= true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUserContact($contact){

    $result;
    if (preg_match('/^\d{10}$/', $contact)) {
        $contact = '0' . $contact;
        return $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordCheck($pass,$repass){

$result;
    if ($pass !== $repass) {
        $result= true;
    }
    else {
        $result = false;
    }
    return $result;
}

function IGNExists($conn, $inGameName, $email){
    $sql = "SELECT * FROM user_details  WHERE userInGameName = ? OR userEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../userSignup.php?error=stmtFailed1');
        exit();
    } //Prepares an SQL statement for execution
    
    mysqli_stmt_bind_param($stmt, "ss", $inGameName, $email); // Binds variables to a prepared statement as parameters
    mysqli_stmt_execute($stmt); //Executes a prepared statement

    $resultData = mysqli_stmt_get_result($stmt); //Gets a result set from a prepared statement

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } //Fetch a result row as an associative array
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn,$userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$basePrice){
    $sql = "INSERT INTO user_details (userName, userInGameName, userGender, userEmail,userContact,userExperience,userPassword,userBasePrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../UserSignup.php?error=stmtFailed2');
        exit();
    } //Prepares an SQL statement for execution
    
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssssssss", $userName,$inGameName,$gender,$email,$contact,$experiance, $hashedPwd,$basePrice); // Binds variables to a prepared statement as parameters
    mysqli_stmt_execute($stmt); //Executes a prepared statement
    mysqli_stmt_close($stmt);
    header('location: ../userSignup.php?error=None');
    exit();
    

}