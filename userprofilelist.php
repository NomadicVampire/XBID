<?php
    include_once "assets/header.php";

?>

<style>
@import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");


/* .container{
  display: flex;
  flex-wrap: wrap;
  
} */
.containers1 {
    display: inline-block;
    width: 31.4%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: 10px;
    margin-left: 10px;
    margin-bottom: 50px;
}
.profile-pic {
  height: 6rem;
  width: 6rem;
  object-fit: center;
  border-radius: 50%;
  border: 2px solid black;
}

 .card {
  margin: 1rem;
  width: 330px;
  height: 355px;
  padding: .5rem 1rem;
  background-color: ##d6436c0f;
  border-radius: 8px;
  box-shadow: 0 12px 32px 4px rgb(41 36 36 / 94%);
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  transition: .2s;
 }
 

p {
  margin-top: 1rem;
  color: #484848;
}

</style> 

<section>
<title>Players | XBID</title>
<!-- CSS only -->
<?php

include_once 'includes/dbh.inc.php';

$sql = "SELECT * FROM user_details ;";

$results = mysqli_query($conn, $sql);



if (mysqli_num_rows($results) > 0) {
  
  while ($row = mysqli_fetch_assoc($results)) {
    $i=0;  
    $ID = $row['userId'];
    $ID = $ID+$i;
    $name = $row['userName'];
    $IGN = $row['userInGameName'];
    $con = $row['userContact'];
    $ema = $row['userEmail'];
    $pro = $row['userProfile'];;
    
    ?>
      <div class ='containers1'>
      <div class='card'>
      
      <img src="uploads/<?php echo $pro; ?>" class='profile-pic'>

      <?php
      echo  "<h2> $IGN </h2>
      <div class='title title--epic'> <h6>Name: $name </h6></div>
      
      <div class='title title--epic'> <h6>Contact: $con </h6></div>
      <div class='title title--epic'> <h6>Email: $ema </h6></div>
      </div>
      </div>";
      $i++;
      
}
}

?>

</section>

<?php
    include_once "assets/footer.php";

?>