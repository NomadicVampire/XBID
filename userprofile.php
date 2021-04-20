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
<title> Profile | XBID </title>
  <header class="header">
    <div class="details">
    <?php
      $uID = $_SESSION["userid"];
      $uIGN = $_SESSION["userign"];
      $uContact = $_SESSION["userCon"];
      $uEmail = $_SESSION["userEm"];
      $uGener = $_SESSION["userGen"];
      $uExp = $_SESSION["userExp"];
      $uBasePrice = $_SESSION['userBp'];
      $ufileName = $_SESSION["userprofile"];
      ?>
    <img src="uploads/<?php echo $ufileName; ?>" class='profile-pic'>
      <h1 class="heading"><?php echo $uIGN ?></h1>
      
        <p><?php echo $uExp ?></p>
      <div class="stats">
        <div class="col-4">
          <h4>Email</h4>
          <p><?php echo $uEmail ?></p>
        </div>
        <div class="col-4">
          <h4>Gender</h4>
          <p><?php echo $uGener ?></p>
        </div>
        <div class="col-4">
          <h4>Contact</h4>
          <p><?php echo $uContact ?></p>
        </div>
      </div>
    </div>
  </header>
</section>

<?php
    include_once "assets/footer.php";
?>