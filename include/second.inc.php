<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="yucatec"){
        header("location: ../second.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../third.php");
        exit();
    }
}
else{
    header("location: ../index.php");
}