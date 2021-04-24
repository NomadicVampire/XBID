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
  <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  <title>XBID</title>
</head>
<body>
<style>
  @font-face {
  font-family: Clip;
  src: url("https://acupoftee.github.io/fonts/Clip.ttf");
}
#team3{
  height:600px;
  background-color: #141114;
  background-image: linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px),
    linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px);
  background-size: 58px 58px;
  background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
}
body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
    
  }
  #about{
    width:100%;
    height:400px;
    background-color:#474e5d;
   color:white;
  }
  
  .container {
    width:100%;
    padding: 80px 120px;
  }
  
  
  
  @media (max-width: 800) {
    .carousel-caption {
      display:inline block ;
     
    }
  }
  .card1{
  box-shadow: 0 ;
  max-width: 260px;
  margin: auto;
  text-align: center;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 260px;
  margin: auto;
  text-align: center;
}


.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
  
 #team{
  background-color: #f8f9d2;
    background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%); 
height:700px;
 }
 #team1{
 
height:700px;
 }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  
  
#contact .card1:hover i,#contact .card1:hover h4,{
	color: #87d37c;
}
h1
{
  color:white;
  
  text-align: center;
}



.sign {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50%;
  height: 50%;
  background-image: radial-gradient(
    ellipse 50% 35% at 50% 50%,
    #6b1839,
    transparent
  );
  transform: translate(-50%, -50%);
  letter-spacing: 2;
  left: 50%;
  top: 50%;
  font-family: "Clip";
  text-transform: uppercase;
  font-size: 6em;
  color: #ffe6ff;
  text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
    -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
    0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  animation: shine 2s forwards, flicker 3s infinite;
}

@keyframes blink {
  0%,
  22%,
  36%,
  75% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
  28%,
  33% {
    color: #ff65bd;
    text-shadow: none;
  }
  82%,
  97% {
    color: #ff2483;
    text-shadow: none;
  }
}

.flicker {
  animation: shine 2s forwards, blink 3s 2s infinite;
}

.flicker h2{
  margin-top: 30px;
    margin-left: -221px;
}

.fast-flicker {
  animation: shine 2s forwards, blink 10s 1s infinite;
}

@keyframes shine {
  0% {
    color: #6b1839;
    text-shadow: none;
  }
  100% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
}

@keyframes flicker {
  from {
    opacity: 1;
  }

  4% {
    opacity: 0.9;
  }

  6% {
    opacity: 0.85;
  }

  8% {
    opacity: 0.95;
  }

  10% {
    opacity: 0.9;
  }

  11% {
    opacity: 0.922;
  }

  12% {
    opacity: 0.9;
  }

  14% {
    opacity: 0.95;
  }

  16% {
    opacity: 0.98;
  }

  17% {
    opacity: 0.9;
  }

  19% {
    opacity: 0.93;
  }

  20% {
    opacity: 0.99;
  }

  24% {
    opacity: 1;
  }

  26% {
    opacity: 0.94;
  }

  28% {
    opacity: 0.98;
  }

  37% {
    opacity: 0.93;
  }

  38% {
    opacity: 0.5;
  }

  39% {
    opacity: 0.96;
  }

  42% {
    opacity: 1;
  }

  44% {
    opacity: 0.97;
  }

  46% {
    opacity: 0.94;
  }

  56% {
    opacity: 0.9;
  }

  58% {
    opacity: 0.9;
  }

  60% {
    opacity: 0.99;
  }

  68% {
    opacity: 1;
  }

  70% {
    opacity: 0.9;
  }

  72% {
    opacity: 0.95;
  }

  93% {
    opacity: 0.93;
  }

  95% {
    opacity: 0.95;
  }

  97% {
    opacity: 0.93;
  }

  to {
    opacity: 1;
  }
}

#services{

}
</style>
<section id="team3">
<div class="sign" style = "font-family: 'Zen Dots', sans-serif;">
      <span class="fast-flicker">X</span><span class="flicker">BID</span>
        
      <span class="flicker"><br><h2>Redefined</h2></span>  
</div>
</section>

<section id="contact" style="height:400px">
       <div class="container">
           <h3 class="text-left text-uppercase">About Us</h3></br>
           <p class="text-justify">We are second year students of IIIT Vadodara. We have created this website to easily host the online auctions under our DBMS project.
            The problem that usually arises in online bidding is that of the Team Owners uncertainty towards the user ,due to the lack of physical evaluation of users how they perform in tournaments.
             Despite the increased numerous advantages of online auction there are problems that are still present, like being physically present in auctions making strategies sharpens mind, helps mind to think faster,
              brain makes calculation faster, via the internet interface that cannot perfectly describe the player quality, they might conduct a demo match to test players performance. 
              The implementation of an online bidding system that provides detailed Users (players) descriptions results in the increased certainty of the Owners towards the choice of the users (Players) that they make.</p>
</div>
</section>

<section id="services" style="background-color: #c3caf987; margin-bottom: -57px;">
       <div class="container">
       <h1 class="text-center text-uppercase" style="font-family: 'Rubik', sans-serif;"><bold>Services</bold></h1>

           <div class="row" style="justify-content:center;">
              
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center ">
                    <i class="fa fa-users fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5" >filter</h4>
                    <p>Each players profile,gores through our algorithm ,and gets filterd on the basis of their previous performances.</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-laptop fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Easy Process</h4>
                    <p>Each players profile,gores through our algorithm ,and gets filterd on the basis of their previous performances.</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-key fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Security</h4>
                    <p>All your data gets directly stored in our secured Databases.With your passwords encoded no one else than you can access your Id,not even us.</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>

</br>
</br>
<section id="team" style="height:800px; width:100%">
<div id="band" class="container text-center">
<h2 style="text-align:left">Meet the Team</h2>
</br>
</br>
  <div class="row">
    
  

<div class="card">
  <img src="assets/img/sahil.jpg" alt="John" style="width:100%">
  <h3>Sahil Meena</h3>
  <p class="title">201951132</p>
  <p>2nd year student ,IIITV</p>
  <row><a href="https://www.instagram.com/10_sahil_kumar_01/"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/SAHIL__12?s=08"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/sahil-kumar-730593175/"><i class="fa fa-linkedin"></i></a>
  <a href="https://github.com/DuizzieDoCode"><i class="fa fa-github"></i></a></row>
  <p><button>Contact</button></p>
</div>

<div class="card">
  <img src="assets/img/sanskar.jpeg" alt="John" style="width:100%">
  <h3>Sanskar Srivastava</h3>
  <p class="title">201951136</p>
  <p>2nd year student ,IIITV</p>
  <row><a href="https://instagram.com/sanskar9128?igshid=hy8xg3u7bh5"><i class="fa fa-instagram"></i></a>
  <a href="https://www.linkedin.com/in/sanskar-srivastava-0216251a6"><i class="fa fa-linkedin"></i></a>
  <a href="https://github.com/Sanskar9218"><i class="fa fa-github"></i></a></row>
  <p><button>Contact</button></p>
</div>

<div class="card">
  <img src="assets/img/sudhanshu.jpg" alt="John" style="width:100%">
  <h3>Sudhanshu Kumar</h3>
  <p class="title">201951154</p>
  <p>2nd year student ,IIITV</p>
  <row><a href="https://www.instagram.com/nomadicvampire/"><i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/Sudhans99622778?s=09"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/sudhanshu-kumar-93246a1b1/"><i class="fa fa-linkedin"></i></a>
  <a href="https://github.com/NomadicVampire"><i class="fa fa-github"></i></a></row>
  <p><button>Contact</button></p>
</div>
<div class="card">
  <img src="assets/img/vinay.jpg" alt="John" style="width:100%">
  <h3>Vinay Wankhede</h3>
  <p class="title">201951168</p>
  <p>2nd year student ,IIITV</p>
  <row>
  <a href="https://twitter.com/Vinay48808128"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/vinay-wankhede-b831ba1b3/"><i class="fa fa-linkedin"></i></a>
  <a href="https://github.com/VinayWankhede11"><i class="fa fa-github"></i></a></row>
  <p><button>Contact</button></p>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </div>
</div>
</section>


<section id="contact">
       <div class="container">
           <h3 class="text-center text-uppercase">contact us</h3>
           <p class="text-center w-75 m-auto">We would love to hear from you.</p>
           <div class="row"><div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center">
                    
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+91-9358161559</p>
                    <p>+91-8881012301</p>
                    <p>+91-7870107022</p>
                    <p>+91-9545339311</p>
                  </div>
                </div>
             </div>
            
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card1 border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>201951132@iiitvadodara.ac.in</p>
                    <p>201951136@iiitvadodara.ac.in</p>
                    <p>201951154@iiitvadodara.ac.in</p>
                    <p>201951168@iiitvadodara.ac.in</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>

</body>
<?php
    include_once "assets/footer.php";
?>
</html>

