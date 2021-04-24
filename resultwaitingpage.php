<?php

  include_once 'assets/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>Waiting</title>
</head>
<style>
*{
    margin:0px;
    /* padding:0px; */
}
.border{
	padding: 5px;
	background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(110deg, #C5E7D7 36%, #88d8b0 34%);
	background-size: 400% 400%;
	height: 380px;
	background-position: 25% 50%;
    box-shadow: 0 13.36px 9.896px #c4b59d,0 -2px 1px #fff;
	-webkit-animation: Gradient 15s ease infinite;
	-moz-animation: Gradient 5s ease infinite;
}
.inner-cutout{
	padding: 40px 10px;
	display: block;
	background-color:#3a5c61;
		
	margin: 2%;
	padding-bottom: 40px;
	height: 350px;
	 background-size: 300%;
	background-position:50% 50%;

}
.knockout {
	
	vertical-align: middle;
	text-align: center;
	font-family: 'Abril Fatface', cursive;
	font-size:50pt;
	color: blue;
	color: #fff;
	background: linear-gradient(110deg, #ffeead 33%, rgba(0, 0, 0, 0) 33%), linear-gradient(160deg, #C5E7D7 36%, #88d8b0 34%);
	background-size: 400%;
	 -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
}
.knockout{
		animation: Gradient 10s ease infinite;
		-webkit-animation: Gradient 15s ease infinite;
		-moz-animation: Gradient 5s ease infinite;
}

@-webkit-keyframes Gradient {
	0% {
		background-position: 30% 50%
	}
	50% {
		background-position: 25% 50%
	}
	100% {
		background-position: 30% 50%
	}
	
}
#conts{
    background-color : #312f2f2e;
}

.main{
	width: 500px;
	height: 450px;
    margin-left: 35%;
	margin-right:40%;
	margin-top: 0%;
    
}

</style>
<body>
<section id="conts">
<br>
<br>
<div class="main">
	<div class = "border">
		<div class = "inner-cutout"> 
			<h1 class="knockout">WAIT !</h1><br>
            <h3 class="knockout">Result is yet to be declared !</h3>
        </div>
	</div>
</div>
</section>
</body>
</html>
<?php

include_once 'assets/footer.php';

?>