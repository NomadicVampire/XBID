<?php
    include_once "assets/header.php";

?>

<style>

@import url("https://fonts.googleapis.com/css?family=Lato:400,400i,700");

body {
  margin: 0;
  font-family: 'Lato', sans-serif;
}

.header {
  min-height: 60vh;
  background: #009FFF;
background: linear-gradient(to right, #ec2F4B, #009FFF);
  color: white;
  clip-path: ellipse(100vw 60vh at 50% 50%);
  display: flex;
  align-items: center;
  justify-content: center;
}

.details {
  text-align: center;
}

.profile-pic {
  height: 6rem;
  width: 6rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid #fff;
}

.location p {
  display: inline-block;
}

.location svg {
  vertical-align: middle;
}

.stats {
  display: flex;
}

.stats .col-4 {
  width: 10rem;
  text-align: center;
}

.heading {
  font-weight: 400;
  font-size: 1.3rem;
  margin: 1rem 0;
}


</style>

<section class="profile">
  <header class="header">
    <div class="details">
      <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ&s=b38c22a46932485790a3f52c61fcbe5a" alt="John Doe" class="profile-pic">
      <?php
   
        $oID = $_SESSION["ownerid"];
        $oName = $_SESSION["ownername"];
        $oTeamname = $_SESSION["ownertn"];
        $oEmail = $_SESSION["ownerEm"];
        $oContact = $_SESSION["ownerCn"] ;
        $oBidAmt = $_SESSION["ownerBA"];

      
        ?>
      
        <h1 class="heading"><?php echo $oName ?></h1>
        
          <p><?php echo $oTeamname ?></p>
        <div class="stats">
          <div class="col-4">
            <h4>Email</h4>
            <p><?php echo $oEmail ?></p>
          </div>
          <div class="col-4">
            <h4>Bid Left</h4>
            <p><?php echo $oBidAmt ?></p>
          </div>
          <div class="col-4">
            <h4>Contact</h4>
            <p><?php echo $oContact ?></p>
          </div>
        </div>
      </div>
  </header>
</section>

<?php
    include_once "assets/footer.php";
?>