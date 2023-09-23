<?php
    $title = "If Statement";     
    include"includes/header.php";
?>

    <br/>
    <br/>
    <div class="text-center">
        <?php 
            echo "<h2>If Statement</h2>";

            $grade = 80;

            if ($grade >= 50) {
                echo "<h3 style='color: green'>You Have Pass</3>";
            }
            else{
                echo "<h3 style='color: red'>You Have Failed</3>";
            }
            $grade ="c";

            if ($grade == "A") {
                echo "<h3 style='color: green'>Good job you received an A</3>";
            }
            elseif ($grade == "B") {
                echo "<h3 style='color: green'>Good job you received an B</3>";
            }
            else {
                echo "<h3 style='color: red'>You Have Failed</3>";
            }
        ?>
    </div>
    <br/>
    <br/>
<div class="text-center">
    <?php
      require"includes/footer.php";
    ?>
</div>