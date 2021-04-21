<?php

  include_once 'assets/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300');

 .main{
  text-align:center;
  background:linear-gradient(141deg, #ccc 25%, #eee 40%, #ddd 55%);
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  padding-top:5vh;
  height:64vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);
}

.result {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

.result:first-of-type {    
  animation: showup 7s infinite;
}

.result:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

.result:last-of-type span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}


p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}
</style>
<body>
    <div class="main">
    <div class="result"></div> 
        <div class="result"> 
        <span>Result</span>
        </div> 
    </div>
              
</body>
</html>
<?php

include_once 'assets/footer.php';

?>