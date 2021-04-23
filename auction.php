<?php
    include_once "assets/header.php";
    $usercount = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <title>Auction</title>
</head>
<style>

.header1{
    display: flex;
    align-items: center;
    justify-content: center;
}
.list-group-bio{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 100px ;
    border: black solid 2px;
    border-radius: 10px;
    height: 400px;
    background-color: #f9c5d1;
    background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);
}
.list-group-bid{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 100px;
    border: black solid 2px;
    border-radius: 10px;
    height: 400px;
    background-color: #f9c5d1;
    background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);
}
.details1{
    padding-top: 100px;
}

.profile-pic {
    height: 6rem;
    width: 6rem;
    object-fit: center;
    border-radius: 50%;
    border: 2px solid #fff;
}
.header1{
	font-size: 15rem;
	text-align: center;
    height:10vh;
    line-height: 90vh;
	color: red;
    border: blue solid 2px;
    border-radius: 10px;
	background-color: #e288f9;
    background-image: linear-gradient(315deg, #e288f9 0%, #ffc988 74%);
	font-family: 'Merriweather', serif;
	font-weight: 800;  
}
li{
    list-style-type: none;
    
}

.details{
    padding-left: 10px;
    font-family: 'Original Surfer', cursive;
}
.valuebid{
    display: flex;
}
.form-control{
    max-width: max-content;
}
span{
    padding-right: 20px;
    font-family: 'Orelega One', cursive;
}
.image{
    padding-left: 120px;
}
#timer{
    padding-left: 150px;   
}

.name{
    
    font-family: 'Orelega One', cursive;
}


td{
    padding: 10px 10px 10px 0;
    /* text-align: center; */
}
.owner{
    font-family: 'Orelega One', cursive;
}
.values{
    font-family: 'Original Surfer', cursive;
}


</style>


<?php

include_once 'includes/dbh.inc.php';


//user sql 
$sql = "SELECT * FROM user_details WHERE userID = $usercount;";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0)  {
  
  $row = mysqli_fetch_assoc($results) ;
    $ID = $row['userId'];
    $name = $row['userName'];
    $IGN = $row['userInGameName'];
    $con = $row['userContact'];
    $ema = $row['userEmail'];
    $pro = $row['userProfile'];
    $rank = $row['userExperience'];
  
}

// extracting remaining bid amt from owner_details
$oid = $_SESSION['ownerid'];
$owner_sql = "SELECT * FROM owner_details WHERE ownerId = $oid ;";
$owner_results = mysqli_query($conn, $owner_sql);

if (mysqli_num_rows($owner_results) > 0)  {
  
  $owner_row = mysqli_fetch_assoc($owner_results) ;

    $varRemBid = $owner_row['ownerBidAmt']; 

}



// auction_details sql
$auction_sql = "SELECT * FROM auction_details ";
$auction_results = mysqli_query($conn, $auction_sql);

if (mysqli_num_rows($auction_results) > 0 ) {
    $auction_row = mysqli_fetch_assoc($auction_results) ;
        
        $iniBasePrice = $auction_row['initialBase'];
        $tName = $auction_row['teamName'];
        $fPrice = $auction_row['finalPrice'];
        $bPrice = $auction_row['basePrice'];
        $aStatus = $auction_row['auctionStatus'];
        
      }else {
         echo 'no user found!';
      }


?>
    <section>
    <title>Join Auction | XBID</title>
     <div class="container">
     <div class="row">
         <div class="col">
             <div class="header1"><h3>Profile</h3></div>
             <ul class="list-group-bio">
                 <br>
                 <div class="image">
                     <img class=" profile-pic"src="https://cdn.mos.cms.futurecdn.net/MMwRCjVEaoJPP4dBBugWFY-1024-80.jpg.webp" alt="Profile Image">
                 </div>
                 <li class="name">Name : <a class="details"><?php echo $name; ?></a></li><br>
                 <li class="name">In-Game Name : <a class="details"><?php echo $IGN; ?></a></li><br>
                 <li class="name">Rank : <a class="details"><?php echo $rank; ?></a></li><br>
                 <li class="name">Email : <a class="details"><?php echo $ema; ?></a></li><br>
                 <li class="name">Contact No. : <a class="details "><?php echo $con; ?></a></li><br>   
             </ul>
             
         </div>
         <div class="col">
             <div class="header1"><h3>Auction</h3></div>
             <ul class="list-group-bid">
                 <h3 id = "timer">Time Left : <span id="countdowntimer">12</span>sec</h3>
                 <br>
                 <br>
                 <li class="name">Current Bid : <a class="details"><?php echo $bPrice; ?></a></li><br> <!--  here we add php tag and add finalPrice variable -->
                 <table>
                    <tr class="owner">
                        <td>Current Team Owner</td>
                        <td>Remaining Bid</td>
                        <td>Total Bid</td>
                    </tr>
                    <tr class="values" id ='valVal'>
                        <td><?php echo $tName; ?></td> <!--  here we add php tag and add owner variable -->
                        <td><?php echo $varRemBid; ?></td>
                        <td>100</td>
                    </tr>
                    <?php
                    if (isset($_GET['error'])) {
                    if ($_GET['error']== 'intergerError') {
                    echo "<p style = 'color:red;'>Please enter a VALID Bid Amount</p>";
                    }
                    if ($_GET['error']== 'bidamtError') {
                    echo "<p style = 'color:red;'>Please enter a bid value greater than Current Price</p>";
                    }
                    if ($_GET['error']== 'bidPlaced!') {
                    echo "<p style = 'color:green;'>Your Bid is placed successfully !</p>";
                    }
                }

                    ?>
                </table>
                <br>
                

                <?php echo "<div class='valuebid'>
                <span>Bid :</span>
                <form action='includes/auction.inc.php?uid=".$ID ."&bp=".$bPrice."&tn=".$tName."' method='post'>
                <input type='text' class='form-control' name = 'bid-value' placeholder='Bid Value'>
                <button type='submit' name='bid-submit' class='btn btn-primary mb-2'>Bid</button>
                </form>
                </div>";
                 
                 ?>
             </ul>
         </div>
     </div>
     </section>

    


<script type="text/javascript">
var timeleft = 15;
var downloadTimer = setInterval(function(){
timeleft--;
document.getElementById("countdowntimer").textContent = timeleft;
if(timeleft <= 0)
    clearInterval(downloadTimer);
    <?php $usercount++ ; ?>
    $TimeLeft--;
},1000);
</script>


<?php

include_once 'assets/footer.php';

?> 