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
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
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
    height: 52vh;
    background-color: #f9c5d1;
    background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%);
}
.list-group-bid{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 100px;
    border: black solid 2px;
    border-radius: 10px;
    height: 52vh;
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
	font-family: 'Niconne', cursive;
	font-weight: 800;  
}
li{
    list-style-type: none;
    font-family: 'Orelega One', cursive;
}
.name{
    padding-top: 30px;
}
.details{
    padding-left: 10px;
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
.time{
    padding-left: 250px;   
}
a{
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
            <li class="name">Name : <a class="details">Sudhanshu</a></li><br>
            <li>In-Game Name : <a class="details">NomadicVampire</a></li><br>
            <li>Rank : <a class="details">Diamond</a></li><br>
            <li>Email : <a class="details">sudhanshu@gmail.com</a></li><br>
            <li>Contact No. : <a class="details ">9393939393</a></li><br>   
        </ul>
        
    </div>
    <div class="col">
        <div class="header"><h3>Auction</h3></div>
        <ul class="list-group-bid">
            <li class="time">Time Remaining : 12:30</li>
            <br>
            <br>
            <li>Current Bid : <a class="details">100</a></li><br>
            <li>Current Owner : <a class="details">Sahil Kumar Meena</a></li><br>
            <li>Your Remining Bid : <a class="details">950</a></li><br>
            <li>Your Bid : <a class="details">100</a></li><br>
            <div class="valuebid">
            <span>Bid :</span>
                <input type="password" class="form-control" id="inputPassword2" placeholder="Bid Value">
                <button type="submit" class="btn btn-primary mb-2">Bid</button>
            </div>
        </ul>
    </div>
  </div>
</body>
</html>
<?php

include_once 'assets/footer.php';

?> 