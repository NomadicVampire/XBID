
<?php
session_start();
if (isset($_POST['bid-submit'])) {
    $useriID = $_GET['uid'];
    $baseP = $_GET['bp'];
    $tna = $_GET['tn'];
    $bid=$_POST['bid-value'];
    $ownerID=$_SESSION['ownerid'];
    $ownerTeamName=$_SESSION['ownertn'];
    

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    if (intergerCheck($bid) == false) {
        header("location: ../auction.php?error=intergerError&uid=$useriID");
        exit();
      }
    //  echo $useriID;
    //  echo $bid;
    //  echo $ownerID;
    //  echo $ownerTeamName;
    //  echo $baseP;
    //  echo $tna;
    
  
    if($bid > $baseP){

 
    if (!fetchDetails($conn,$useriID)) {
      returnbidvalue($conn,$baseP,$tna);
    }
    reduceOwnerBidAmt($conn,$bid,$ownerID);
    updateAuctionDetails($conn,$bid,$ownerTeamName,$useriID);  
    
  }
  else{

    header("location: ../auction.php?error=bidamtError&uid=$useriID");
  }

}else {
    header('location: ../auction.php?error=error');
    exit();
}
