<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">Walkaround in <a href="https://goo.gl/maps/FjEL65ryqq77SnwX8">20 40' 58.9"n 88 34'19.9"w
</a>.Its very good or as the french says....</label>
    
        <form class="fo" action="include/fifth.inc.php" method="post">
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