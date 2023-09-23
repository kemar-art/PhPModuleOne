<?php
    $title = "For Loop";
    include"includes/header.php";
?>
    
    <h1 class="text-center">For Loops</h1>


        <div class="row justify-content-center">
            <div class="col-2">
                <?php 
                    // For Loops
                        for($count = 0; $count < 10; $count++){
                            echo '<p>HELLO WORLD</p>';
                        }
                ?>
            </div>
            <div class="col-2">
                <?php 
                        for($count = 0; $count < 10; $count++){
                            echo "<p>The Count is: $count</p>";
                        }
                ?>
            </div>
        </div>
       

 <div class="text-center">
    <?php
     require"includes/footer.php";
    ?>
 </div>          

    
    