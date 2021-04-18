<?php

  include_once 'assets/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Auction</title>
</head>
<style>
    .main{
        display: flex;
        justify-content: first baseline;
    }
    .left{
        border-right: solid black 6px;
        border-bottom: solid black 6px;  
        background-color: black;        
        padding-right: 300px;

    }
    .header{
        margin-left: 350px;
        margin-top: 70px;
        font-family: 'Zen Dots', cursive;
        color: white;

    }
    .bio{
        margin-left: 120px;
        margin-top: 50px;
        list-style-type: none;
        font-family: 'Original Surfer', cursive;
        font-size: 20px;
        color: white;
        
    }
    .contact{
        margin-left: 120px;
        margin-top: 50px;
        margin-bottom: 60px;
        list-style-type: none;
        font-family: 'Original Surfer', cursive;
        font-size: 20px;
        color: white;
    }
    .details{
        font-family: 'EB Garamond', serif;
        padding-left: 20px;
    }
    .iconic{
        margin-left: 400px;
        margin-top: 70px;
        font-size: 40px;
    }
    .right{
        padding-right: 120px ;
        padding-left: 120px;
        border-bottom: solid black 6px;  
        border-top: solid black 6px;
        border-right: solid black 6px;  
    }
    .bid{
        margin-left: 190px;
        margin-top: 70px;
        font-family: 'Zen Dots', cursive;
        align-items: center;
    }
    .icons{
        margin-left: 250px;
        margin-top: 70px;
        font-size: 40px;
    }
    .currentbid{
        margin-left: 120px;
        margin-top: 50px;
        list-style-type: none;
        font-family: 'Original Surfer', cursive;
        font-size: 20px;
    }
    .urbid{
        margin-left: 120px;
        margin-top: 50px;
        list-style-type: none;
        font-family: 'Original Surfer', cursive;
        font-size: 20px;
        display: flex;
    }
    .text-bid{
        border: black dotted 2px;
    }
   
</style>
<body>
    <div class="main">
        <div class="left">
        <div  class="header"><h3>Profile</h3></div>
        <div class="iconic">
            <i class="icon ion-man" style="color: white;"></i> 
            <i class="icon ion-woman" style="color: white;"></i>
        </div>
        <div class="bio">
            <li>Name : <a class="details">Sudhanshu Kumar</a></li>
            <li>In-Game Name : <a class="details">NomadicVampire</a></li>
            <li>Rank/Rating : <a class="details">NOOB</a></li>
        </div>
        <div class="contact">
            <li>Email : <a class="details">sudhanshu@gmail.com</a></li>
            <li>Contact No. : <a class="details">9999999999</a></li>
        </div>
        </div>
        <div class="right">
            <div class="bid"><h3>Bidding</h3></div>
            <div class="icons">
                <i class="icon ion-hammer" style="color: black;"></i>
            </div>
            <div class="currentbid">
                <li>Current Bid : <a class="details">1000</a></li>
            </div>
            <div class="urbid">
                <h5>Your Bid :</h5>
                <input type="text" class="text-bid" placeholder="Bid value" name = "bidvalue" required="required">
                <button type="submit" name="submit-bid" class="btn btn-dark btn-block">Bid</button>

            </div>
        </div>
        
    </div>
    
</body>
</html>
<?php

  include_once 'assets/footer.php';

?>