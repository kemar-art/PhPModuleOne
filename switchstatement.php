<?php
    $title = "Switch Statements";
    include"includes/header.php";
?>
    <br/>
    <h1 class="text-center">Switch Statements</h1>
    <br/>
    <br/>
    <div class="text-center">
        <?php 
            $grade = "A";
            switch($grade){
                case "A":
                    echo "<h2 style='color: green'>Great! You Pass</h2>";
                    break;
                case "B":
                    echo "<h2 style='color: blue'>Good job You Pass</h2>";
                    break;
                default:
                    echo "<h2 style='color: red'>You Failed....</h2>";
                    break;
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
    