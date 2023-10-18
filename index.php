<?php
    include 'login.php';
?>
    <section class="main">
        <label class="que">Treasure of Itza</label>
    
        <form class="fo" action="include/index.inc.php" method="post">
            <input class="text_field" type="text" name="ans"  placeholder="Enter your name" autocomplete="off" ><br>
            <button onclick="fn()" type="submit" name="submit">Start</button>
        </form>
    </section>
    
</body>
</html>