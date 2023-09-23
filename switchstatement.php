<?php
    $title = "Switch Statements";
    include"includes/header.php";
?>
    
    <h1>Switch Statements</h1>
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

<?php
    require"includes/footer.php";
?>