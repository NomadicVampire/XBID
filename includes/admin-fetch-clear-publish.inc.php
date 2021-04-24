<?php

if (isset($_POST['fetch'])) {
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    adminFetchDetails($conn);


}elseif (isset($_POST['clear'])) {
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    adminClearDetails($conn);

}elseif (isset($_POST['start'])) {
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    auctionStart($conn);
}elseif (isset($_POST['stop'])) {
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    auctionStop($conn);
}
elseif (isset($_POST['pub-result'])) {
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';
    
    publishResult($conn);
}

else {
    header("location: ../admin.php?error=error");
}
