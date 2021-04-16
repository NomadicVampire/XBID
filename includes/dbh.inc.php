<?php

$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = '';
$dBname = 'xbid';

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
