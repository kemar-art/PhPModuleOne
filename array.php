<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h>
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
</body>
</html>