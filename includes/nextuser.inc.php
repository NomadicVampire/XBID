<?php

if (isset($_POST['bid-next'])) {
    $count = $_GET['ucount'];

    $count = $count +1;
    header('location: ../auction.php?co= $count');
}