<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">We don't know the beginning, but we do know the end</label>
    
        <form class="fo" action="include/forth.inc.php" method="post">
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