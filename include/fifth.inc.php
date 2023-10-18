<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="bienvenidos"){
        header("location: ../fifth.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../sixth.php");
        exit();
    }
}
else{
    header("location: ../fifth.php");
}