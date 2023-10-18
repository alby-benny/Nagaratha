<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    if($ans!=="2012"){
        header("location: ../forth.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../fifth.php");
        exit();
    }
}
else{
    header("location: ../forth.php");
}