<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@600&family=Fredoka+One&display=swap" rel="stylesheet">

  </head>
  <body>
    <style>
      .navbar-brand{
        font-family: 'Zen Dots', cursive;
        margin-left: 70px;
      }
      #navbarNav{
        margin-right: 70px;
        font-family: 'Crimson Pro', serif;
        font-size: 20px;
      }
     
    </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" >
    <a class="navbar-brand" href="index.php" style="font-size:200%  ">XBID</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Services</a>
        </li>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      <?php

      if(isset($_SESSION["userid"])){
        // if User is logged in
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="userprofile.php">Profile</a>
      </li>';
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="includes/userlogout.inc.php">Log Out</a>
      </li>';
      }
      else if(isset($_SESSION["ownerid"])){
        // if Owner is logged in
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="ownerprofile.php">Profile</a>
      </li>';
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="userprofilelist.php">Players</a>
      </li>';
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="auction.php">Join Auction</a>
      </li>';
        echo '<li class="nav-item">
        <a class="nav-link active" aria-current="page" href="includes/ownerlogout.inc.php">Logout</a>
      </li>';
      }
      else{
        //  Login Dropdown 
        echo "<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
          Login
        </a>
        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
          <li><a class='dropdown-item' href='../XBID/adminlogin.php'> Admin (private)</a></li>
          <li><a class='dropdown-item' href='../XBID/userlogin.php'> User</a></li>
          <li><a class='dropdown-item' href='../XBID/ownerlogin.php'> Owner</a></li>

        </ul>
      </li>";

        //  SignUp Dropdown
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Sign Up
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../XBID/usersignup.php"> User</a></li>
          <li><a class="dropdown-item" href="../XBID/ownersignup.php"> Owner</a></li>
        </ul>
      </li>';
      }
      

        ?>
        
      </ul>
    </div>
  </div>
</nav>
</script></body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</html>