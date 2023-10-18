<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">We are the civilization that have been speaking </label> <br>
        <img class="vegeta" src="img/mayanNumber.png"><br>
        <label class="que">for a <u>NUMBER</u
            > of years.</label>
       
        <form class="fo" action="include/final.inc.php" method="post">
            <input class="text_field" type="text" name="ans"  placeholder="Enter the answer" autocomplete="off">
            <button onclick="fn()" type="submit" name="submit">Submit</button>
        </form>
        <label class="wans">
            <?php
                if(isset($_GET["error"])){
                    echo "<p>Wrong Answer</p>";
                }
            ?>
        </label>
    </section>
    
</body>
</html>