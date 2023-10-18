<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">Saxony | skidrow | astronomical table</label>
       
        <form class="fo" action="include/sixth.inc.php" method="post">
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