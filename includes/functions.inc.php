<?php


//   ----------------------------------------------------------------------------------------------------------
//                                                USER SIGNUP
//--------------------------------------------------------------------------------------------------------


function emptyInputUserSignup($userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$repass){

    $result;
    if (empty($userName) || empty($inGameName) || empty($gender)|| empty($email)|| empty($contact)||empty($pass)|| empty($repass)) {
        $result= true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidName($userName){
    $result;
    
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $userName)) {
      $result=true;
        
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUsername($inGameName) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $inGameName)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUserEmail($email){
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
    if (preg_match('/^[1-9][0-9]{10}$/', $contact)) {
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
        header('location: ../usersignup.php?error=stmtFailed1');
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
        header('location: ../usersignup.php?error=stmtFailed2');
        exit();
    } //Prepares an SQL statement for execution
    
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssssssss", $userName,$inGameName,$gender,$email,$contact,$experiance, $hashedPwd,$basePrice); // Binds variables to a prepared statement as parameters
    mysqli_stmt_execute($stmt); //Executes a prepared statement
    mysqli_stmt_close($stmt);
    header('location: ../usersignup.php?error=None');
    exit();
    

}




//   ----------------------------------------------------------------------------------------------------------
//                                                         OWNER SIGNUP
//--------------------------------------------------------------------------------------------------------

function emptyInputOwnerSignup($name,$teamname,$email,$contact,$password,$confirm_password){
    $result;
    if(empty($name) || empty($teamname) || empty($email) || empty($contact) || empty($password) || empty($confirm_password) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidOwnerName($name) {
    $result;
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidOwnerTeamname($teamname) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $teamname)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidOwnerContact($contact){

    $result;
    if (preg_match('/^[1-9][0-9]{10}$/', $contact)) {
        $contact = '0' . $contact;
        return $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidOwnerEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function OwnerpwdMatch($password, $confirm_password){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function OwneruidExists($conn, $teamname, $email){

    $sql = "SELECT * FROM owner_details WHERE ownerTeamName = ? OR ownerEmail = ?;";
    $stmt = mysqli_stmt_init($conn);    // Prepared Statement
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../onwersignup.php?error=stmtfailed");
        exit();
    }
    // now if this not fails then we pass data through argument to chechk whether username exists or not.

    // "ss" for two strings. s stands for string
    mysqli_stmt_bind_param($stmt, "ss", $teamname, $email);
    mysqli_stmt_execute($stmt);  //executing prepared statement

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        // Here assoc tells that it fetch the whole row whereever the query got matched
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    // Closing the prepared statement
    mysqli_stmt_close($stmt);

}


// Function for storing data in data base when it passes through all error
function createOwner($conn,$name,$teamname,$email,$contact,$password){

    $sql = "INSERT INTO owner_details (ownerName, ownerTeamName, ownerEmail, ownerContact, ownerPassword) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);    // Prepared Statement

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../ownersignup.php?error=stmtfailed");
    }

    // Hashed password for secuirity purpose
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    // "ssss" for four strings data
    mysqli_stmt_bind_param($stmt, "sssss", $name, $teamname, $email, $contact, $hashedPwd);
    mysqli_stmt_execute($stmt);  //executing prepared statement

    // Closing the prepared statement
    mysqli_stmt_close($stmt);

    // When signup is done when he sends user to signup page with no error
    header("location: ../ownersignup.php?error=none");
    exit();

}
