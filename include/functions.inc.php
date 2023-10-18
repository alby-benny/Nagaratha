<?php
function emptyInput($name){
    $result;
    if(empty($name)){
        $result=false;
    }
    return $result;
}
function Users($name,$Time){
    session_start();
    $_SESSION["Username"] =$name;
    $_SESSION["STime"] =$Time;
    $_SESSION["t"]=0;
    header("location: ../first.php");
}
function createUser($conn,$name,$Time,$ETime,$result){
    $sql = "Insert INTO users(usersName,startTime,EndTime,result) VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssss", $name,$Time,$ETime,$result);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: Seventh.php");
    
}

function ans($ETime){
    $result=STime-ETime;
    return $result;
}

