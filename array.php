
<?php
    $title = "Array"; 
    include"includes/header.php";
?>
    <h1 class="text-center">Array</h>
    <?php 
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        
        echo "<p>Printing the number the is at the 5th position: $numbers[4]</p>";

        echo "<p>Printing the number the is at the 6th position:$numbers[6]</p>";

        $arraySize = count($numbers);
        echo "<p>The size of the Array is: $arraySize</p>";

        echo "<p>These are all the numbers in the Array:</p>";
        for($count = 0; $count < $arraySize; $count++){
            echo "<p> $numbers[$count]</p>";
           
        }
    ?>
<?php
    require"includes/footer.php";
?>