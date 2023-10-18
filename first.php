<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">The road to ITZA is rough, please <h2> Coordinate </h2></label>
    
        <form class="fo" action="include/first.inc.php" method="post">
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