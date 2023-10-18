<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="ix chel"){
        header("location: ../third.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../forth.php");
        exit();
    }
}
else{
    header("location: ../third.php");
}