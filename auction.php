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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <title>Auction</title>
</head>
<style>
.header{
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
.header{
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
<body>
<div class="container">
  <div class="row">
    <div class="col">
        <div class="header"><h3>Profile</h3></div>
        <ul class="list-group-bio">
            <br>
            <div class="image">
                <img class=" profile-pic"src="https://cdn.mos.cms.futurecdn.net/MMwRCjVEaoJPP4dBBugWFY-1024-80.jpg.webp" alt="Profile Image">
            </div>
            <br>
            <li class="name">Name : <a class="details">Sudhanshu</a></li><br>
            <li class="name">In-Game Name : <a class="details">NomadicVampire</a></li><br>
            <li class="name">Rank : <a class="details">Diamond</a></li><br>
            <li class="name">Email : <a class="details">sudhanshu@gmail.com</a></li><br>
            <li class="name">Contact No. : <a class="details ">9393939393</a></li><br>   
        </ul>
        
    </div>
    <div class="col">
        <div class="header"><h3>Auction</h3></div>
        <ul class="list-group-bid">
            <h3 id = "timer">Time Left : <span id="countdowntimer">12</span>sec</h3>
<<<<<<< HEAD
            <br>
=======
>>>>>>> 837a7833c6ce12f68af2551fca1c3a4534cbbdb3
            <br>
            <li class="name">Current Bid : <a class="details">100</a></li><br>
            <table>
                <tr class="owner">
                    <td>Current Owner</td>
                    <td>Your Remining Bid</td>
                    <td>Your Bid</td>
                </tr>
                <tr class="values">
                    <td>Sahil Kumar Meena</td>
                    <td>950</td>
                    <td>100</td>
                </tr>
            </table>
            <br>
            <div class="valuebid">
            <span>Bid :</span>
                <input type="text" class="form-control" id="inputPassword2" placeholder="Bid Value">
                <button type="submit" class="btn btn-primary mb-2">Bid</button>
            </div>
        </ul>
    </div>
  </div>
</body>

</html>

<?php
$TimeLeft = 10;
echo '<script type="text/javascript">
var timeleft = 12;
var downloadTimer = setInterval(function(){
timeleft--;
document.getElementById("countdowntimer").textContent = timeleft;
if(timeleft <= 0)
    clearInterval(downloadTimer);
    $TimeLeft--;
},1000);
</script>';
$TimeLeft = 0;

// if($TimeLeft <0){
//     header('location: ../index.php');
//     exit();
// }


include_once 'assets/footer.php';

?> 