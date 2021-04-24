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
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <title>Administration</title>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<style>
  .header{
    min-height: 65vh;
    background-color: #f8ceec;
    background-image: linear-gradient(315deg, #f8ceec 0%, #a88beb 74%);
  }
  body {
  margin: 0;
  padding: 0;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

p1 {
  position: relative;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 2em;
  letter-spacing: 4px;
  overflow: hidden;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: repeat;
  background-size: 80%;
  animation: animate 1.5s linear infinite;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
  display: flex;
  justify-content: center;
  align-items: center;
  padding-top: 50px;
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
.button1{
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding-top: 15px;
      padding-bottom: 15px;
      font-family: 'Yanone Kaffeesatz', sans-serif;
}
.btn{
      margin: 15px;
      padding: 10px;
     
}
h3{
  text-align:center;
}
#protocol{
  background-color: #5e437357;
    border-radius: 21px;
    margin-left: 163px;
    margin-right: 202px;
    height: 250px;
    padding: 35px;
    font-family: 'Rubik', sans-serif;
    color:white;
}
</style>
<body>
    <header class="header">
      <p1>Welcome Admin</p1>
      <div>
      <br>
      <section id="protocol">
      <ul>
      <h3>Auction Protocol</h3>
        <li>START AUCTION: Starts the auction</li>
        <li>STOP AUCTION: Stops the auction</li>
        <li>FETCH DETAIL: Fetch the data from User's and Owner's table for conducting auction</li>
        <li>CLEAR DATA: Clear all records</li>
      </ul>
      </section>


      </div>
      <div class="button1">
      <form action="includes/admin-fetch-clear-publish.inc.php" method="post">
      <button type="submit" name="start" class="btn btn-primary btn-sm"><h3>Start Auction</h3></button>
      <button type="submit" name="stop" class="btn btn-primary btn-sm"><h3>Stop Auction</h3></button>
      <button type="submit" name="fetch" class="btn btn-primary btn-sm"> <h3>Fetch Data</h3></button>
      <button type="submit" name="clear" class="btn btn-primary btn-sm"><h3>Clear Record</h3></button>
      </form>
      </div>
      <p>
    <center>
    
<?php
    if (isset($_GET['error'])) {
	if ($_GET['error']== 'auctionDetailsNOTUpdated') {
	 echo "<p style = 'color:red;'>Fetching Failed!</p>";
	}
	elseif ($_GET['error']== 'auctionDetailsUpdated') {
	echo "<p style = 'color:green;'>Details Fetched Successfully!</p>";
	}
  
	if ($_GET['error']== 'auctionDetailsNOTCleared') {
	 echo "<p style = 'color:red;'>Deletion Failed!</p>";
	}
	elseif ($_GET['error']== 'auctionDetailsCleared') {
	echo "<p style = 'color:green;'>Details Cleared Successfully!</p>";
	}

	if ($_GET['error']== 'auctionNOTstarted') {
	 echo "<p style = 'color:red;'>Something went wrong. Auction couldn't start!</p>";
	}
	elseif ($_GET['error']== 'auctionStarted') {
	echo "<p style = 'color:green;'>Auction Started Successfully!</p>";
	}

	if ($_GET['error']== 'auctionNOTstopped') {
	 echo "<p style = 'color:red;'>Something went wrong. Auction couldn't stop!</p>";
	}
	elseif ($_GET['error']== 'auctionStopped') {
	echo "<p style = 'color:green;'>Auction Stopped Successfully!</p>";
	}

}
?>
</center></p>
    </header>
   
</body>
</html>
<?php

  include_once 'assets/footer.php';

?>