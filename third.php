<?php
    include 'header.php';
?>
    <section class="main">
        <label class="que">Go find the god</label>
         <br>
        <label class="god">NNN<u>MMMMMMMMMM</u>NNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNN</label><br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NN<u>MM</u>NNNNNNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NN<u>MM</u>NNNNNNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNNNNN</label>
        <br>
        <label class="god">NNN<u>MMMMMMMMMM</u>NNNNNNNNNN<u>MM</u>NNNNNNNNNNNNNNNNNNNNNN<u>MM</u>NNNNNNNNNN</label>
        <form class="fo" action="include/third.inc.php" method="post">
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
    <script type="text/javascript">
        const keyboard=document.querySelector('BODY')
        var a=document.getElementsByTagName('u');
        let b=a.length;
        var c=document.getElementsByClassName('god');
        let d=c.length; 
        keyboard.addEventListener('keypress', e=>{
            if(e.keyCode===10 || e.keyCode===109){
                for(let i=0;i<b;i++){
                    a[i].style.color = "red";
                }
                for(let i=0;i<d;i++){
                    c[i].style.color = "grey";
                }
            }
        })
        
        
    </script>
    
</body>
</html>