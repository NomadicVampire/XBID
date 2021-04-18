<?php
session_start();
include_once 'functions.inc.php';
$uidd = $_SESSION["userid"];


if (isset($_POST['user-upload'])) {
    $file = $_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $fileTempName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    include_once 'dbh.inc.php';


    $sql = "SELECT FROM uprofile_details WHERE usersId= '$uidd';";
    $stmt = mysqli_stmt_init($conn);    // Prepared Statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed1Pro");
        exit();
    }
    // mysqli_stmt_bind_param($stmt, "ss", $teamname, $email);
    mysqli_stmt_execute($stmt);  //executing prepared statement

    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div>";
            if ($row['userStatus'] == 0) {
                echo "<img src='assets/uploads/user".$uidd.".jpg' >";
            }else{
                echo "<img src='assets/uploads/user/default.png' >";
            }
        echo "</div>";
    }

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $fileAllowed = array('jpg', 'jpeg' , 'png' , 'pdf' , 'txt');

    if (in_array($fileActualExt, $fileAllowed)) {
        if ($fileError === 0) {
             if ($fileSize < 10000000) {
                 
                $fileNameNew = "profile".$uID.".".$fileActualExt;
                $fileDst = 'assets/uploads/user'.$fileNameNew;
                move_uploaded_file($fileTempName, $fileDst);
                $sqli = "UPDATE uprofile_details SET status=0 WHERE usersId='$uidd';";
                $resu = mysqli_query($conn, $sqli);
                header("Location: userprofile.php?error=successUpload!");

             }else {
                 echo "file size is too large!";
             }
        }else {
            echo 'theres an error!';
        }
    }else {
        echo "wrong extension file!";
    }


}
