<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">Congratulations,</label>
    <?php
        
        if($_SESSION["t"]!==4){
            date_default_timezone_set('Asia/Kolkata');
            $eh=date("h");
            $em=date("i");
            $es=date("s");
            $ETime=($eh*60*60)+($em*60)+($es);
            $_SESSION["t"]=4;
            $_SESSION["M"]=intval(($ETime-$_SESSION["STime"])/60);
            $_SESSION["H"]=intval($_SESSION["M"]/60);
            $_SESSION["S"]=($ETime-$_SESSION["STime"])%60;
            $Result=$_SESSION["H"]."H:".$_SESSION["M"]."M:".$_SESSION["S"]."S";
            require_once 'include/dbh.inc.php';
            require_once 'include/functions.inc.php';
            createUser($conn, $_SESSION["Username"], $_SESSION["STime"], $ETime,$Result);
        }
        
        
        
    ?>
        <label class="Time"><?php echo $_SESSION["Username"]?></label><br><br><br>
        <label class="Time">Time Taken:  <?php echo $_SESSION["M"]?>M:<?php echo $_SESSION["S"]?>S</label><br>
    </section>
    
</body>
</html>