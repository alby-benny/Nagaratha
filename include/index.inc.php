<?php

if(isset($_POST["submit"])){
    $name = $_POST["ans"];
    date_default_timezone_set('Asia/Kolkata');
    $h=date("h");
    $m=date("i");
    $s=date("s");
    $Time=($h*60*60)+($m*60)+($s);

   
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    
    Users($name,$Time);
}
else{
    header("location: ../index.php");
    exit();
}

