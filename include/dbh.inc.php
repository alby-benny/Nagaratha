<?php

$serverName ="localhost";
$dBUserName ="root";
$dBPassword ="";
$dBName ="namesystem";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
    
}