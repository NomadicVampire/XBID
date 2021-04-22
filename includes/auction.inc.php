
<?php
session_start();
if (isset($_POST['bid-submit'])) {
    $useriID = $_GET['uid'];
    $bid=$_POST['bid-value'];
    $ownerID=$_SESSION['ownerid'];
    $ownerTeamName=$_SESSION['ownertn'];
    

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    if (intergerCheck($bid) !== false) {
        header('location: ../auction.php?error=intergerError');
        exit();
      }
    //  echo $useriID;
    //  echo $bid;
    //  echo $ownerID;
    //  echo $ownerTeamName;

    $isql = "UPDATE auction_details SET basePrice = $bid , finalPrice = $bid , teamName = $ownerTeamName WHERE userID = $useriID ;";
    mysqli_query($conn, $isql);


    reduceOwnerBidAmt($conn,$bid,$ownerID,$useriID,$ownerTeamName);
    

}else {
    header('location: ../auction.php?error=error');
    exit();
}
