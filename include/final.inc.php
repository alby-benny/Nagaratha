<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="aztec"){
        header("location: ../final.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../Seventh.php");
        exit();
    }
}
else{
    header("location: ../final.php");
}