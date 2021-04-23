<?php


//   ----------------------------------------------------------------------------------------------------------
//                                                USER SIGNUP
//--------------------------------------------------------------------------------------------------------


function emptyInputUserSignup($userName,$inGameName,$gender,$email,$contact,$experiance,$pass,$repass){

    $result;
    if (empty($userName) || empty($inGameName) || empty($gender)|| empty($email) || empty($contact)||empty($pass)|| empty($repass)) {
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

function createUser($conn,$userName,$inGameName,$gender,$userprofile,$email,$contact,$experiance,$pass,$basePrice){
    $sql = "INSERT INTO user_details (userName, userInGameName, userGender, userProfile,userEmail,userContact,userExperience,userPassword,userBasePrice) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../usersignup.php?error=stmtFailed2');
        exit();
    } //Prepares an SQL statement for execution
    
    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    
    mysqli_stmt_bind_param($stmt,"sssssssss", $userName,$inGameName,$gender,$userprofile,$email,$contact,$experiance, $hashedPwd,$basePrice); // Binds variables to a prepared statement as parameters
    mysqli_stmt_execute($stmt); //Executes a prepared statement

    mysqli_stmt_close($stmt); //Closing the statement
    header('location: ../usersignup.php?error=None');
    exit();

    
    
    

}




//   ----------------------------------------------------------------------------------------------------------
//                                                          USER LOGIN
//--------------------------------------------------------------------------------------------------------


function loginUser($conn,$username,$pwd){
    $IGNExists = IGNExists($conn, $username, $username);
    // BOth the arguments are as username as it automatically fits in sql query 


    // If entered username or mail is not in database
    if($IGNExists === false){
        header("location: ../userlogin.php?error=InvalidUsername");
        exit();
    }

    // As $uidExists stores assoc which is array of data in rows. so to check the passowrd column either we can write its index or we can write column name
    $pwdHashed = $IGNExists["userPassword"];

    $checkPwd = password_verify($pwd, $pwdHashed);
    // password_verify function checks that two agruments which are password, are same or not.... if same then return true else false.

    if($checkPwd === false){
        header("location: ../userlogin.php?error=WrongPassword");
        exit();
    }
    else if ($checkPwd === true){
        session_start(); //new session started
        $_SESSION["userid"] = $IGNExists["userId"];
        $_SESSION["userign"] = $IGNExists["userInGameName"];
        $_SESSION["userprofile"] = $IGNExists["userProfile"];
        $_SESSION["userCon"] = $IGNExists["userContact"];
        $_SESSION["userBp"] = $IGNExists["userBasePrice"];
        $_SESSION["userExp"] = $IGNExists["userExperience"];
        $_SESSION["userGen"] = $IGNExists["userGender"];
        $_SESSION["userEm"] = $IGNExists["userEmail"];
        
        // here userid and useruid are global session variables

        header("location: ../index.php");
        exit();

    }
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
        header("location: ../onwersignup.php?error=stmtfailed1");
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
        header("location: ../ownersignup.php?error=stmtfailed2");
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

//   ----------------------------------------------------------------------------------------------------------
//                                                          OWNER LOGIN
//--------------------------------------------------------------------------------------------------------

function loginOwner($conn,$ownername,$ownerpwd){
    $OwneruidExists = OwneruidExists($conn, $ownername, $ownername); 

    // If entered teamname or mail is not in database
    if($OwneruidExists === false){
        header("location: ../ownerlogin.php?error=InvalidTeamname");
        exit();
    }

    $PwdHashed = $OwneruidExists["ownerPassword"];

    $CheckPwd = password_verify($ownerpwd, $PwdHashed);

    if($CheckPwd === false){
        header("location: ../ownerlogin.php?error=OwnerWrongPassword");
        exit();
    }
    else if ($CheckPwd === true){
        session_start(); //new session started
        $_SESSION["ownerid"] = $OwneruidExists["ownerId"];
        $_SESSION["ownername"] = $OwneruidExists["ownerName"];
        $_SESSION["ownertn"] = $OwneruidExists["ownerTeamName"];
        $_SESSION["ownerEm"] = $OwneruidExists["ownerEmail"];
        $_SESSION["ownerCn"] = $OwneruidExists["ownerContact"];
        $_SESSION["ownerBA"] = $OwneruidExists["ownerBidAmt"];

        header("location: ../index.php");
        exit();

    }
}

//   ----------------------------------------------------------------------------------------------------------
//                                                         ADMIN LOGIN
//--------------------------------------------------------------------------------------------------------


function adminExists($conn,$adminEmail){

    $sql = "SELECT * FROM admin_details  WHERE adminEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../adminlogin.php?error=stmtFailed1');
        exit();
    } //Prepares an SQL statement for execution
    
    mysqli_stmt_bind_param($stmt, "s", $adminEmail); // Binds variables to a prepared statement as parameters
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

function loginAdmin($conn,$adminEmail,$adminPwd){

    $adminExists = adminExists($conn,$adminEmail); 

    // If entered teamname or mail is not in database
    if($adminExists === false){
        header("location: ../adminlogin.php?error=InvalidEmail");
        exit();
    }

     $PwdNotHashed = $adminExists["adminPassword"];

    

    if($PwdNotHashed !== $adminPwd){
        header("location: ../adminlogin.php?error=wrongadminpwd");
        exit();
    }
    else if ($PwdNotHashed == $adminPwd){
        session_start(); //new session started
        $_SESSION["adminid"] = $adminExists["adminId"];
        $_SESSION["adminemail"] = $adminExists["adminEmail"];

        header("location: ../admin.php");
        exit();

    }
 }

 // END --ADMIN ----
 function intergerCheck($bid){
    $result;
    if (preg_match('/^[1-9][0-9]{0,3}$/', $bid)) {
        return $result = true;
    }
    else {
        $result = false;
    }
    return $result;

 }

 function fetchDetails($conn,$useriID){
    $varTeamName;
    $resu;
    $sql = "SELECT teamName FROM auction_details WHERE userID = $useriID ;";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) > 0)  {
    $row = mysqli_fetch_assoc($results); 
    $varTeamName = $row['teamName'];
    
    }
    if ($varTeamName == 'NA') {
        $resu = true;
    }else {
        $resu = false;
    }
    return $resu;
 }

function returnbidvalue($conn,$baseP,$tna){
    $sql = "UPDATE owner_details SET ownerBidAmt = ownerBidAmt+$baseP WHERE ownerTeamName = '".$tna."';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../auction.php?error=stmtFailedRV');
         exit();
   } 
   mysqli_stmt_execute($stmt);  //Executes a prepared statement
   mysqli_stmt_close($stmt);
//    header('location: ../auction.php?error=None');
   
 }

 function updateAuctionDetails($conn,$bid,$ownerTeamName,$useriID){
    $sql = "UPDATE auction_details SET basePrice= $bid , finalPrice = $bid , teamName = '" .$ownerTeamName."' WHERE userID= $useriID;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../auction.php?error=stmtFailedAD');
         exit();
   } 
   mysqli_stmt_execute($stmt);  //Executes a prepared statement
   mysqli_stmt_close($stmt);
    header('location: ../auction.php?error=bidPlaced!');
   
 }


 function reduceOwnerBidAmt($conn,$bid,$ownerID){
    
    $sql = "UPDATE owner_details SET ownerBidAmt = ownerBidAmt-$bid WHERE ownerId =$ownerID;";
    $stmt = mysqli_stmt_init($conn); //Initializes a statement and returns an object for use with mysqli_stmt_prepare
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../auction.php?error=stmtFailed');
         exit();
   } 
    // mysqli_stmt_bind_param($stmt,"i",$bid); // Binds variables to a prepared statement as parameters
    mysqli_stmt_execute($stmt); //Executes a prepared statement
    mysqli_stmt_close($stmt);
    // header('location: ../auction.php?error=None');
    
}