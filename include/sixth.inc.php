<?php

if(isset($_POST["submit"])){
    $ans=$_POST["ans"];
    $ans=strtolower($ans);
    if($ans!=="dresden codex"){
        header("location: ../sixth.php?error=wronganswer");
        exit();
    }
    else{
        header("location: ../seventh.php");
        exit();
    }
}
else{
    header("location: ../sixth.php");
}