<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="20.6843° n, 88.5678° w"){
        header("location: ../first.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../second.php");
        exit();
    }
}
else{
    header("location: ../first.php");
}