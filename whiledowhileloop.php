<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whiledowhileloop</title>
</head>
<body>
    <h1>Do While Loop</h1>
    <?php
        $grade = 0;
        do{
            echo "<p>THE IS THE DO WHILE LOOP</p>";
            $grade++;
        }
        while($grade < 10)
    ?>


    <h1>While While Loop</h1>
    <?php
        $grade = 0;
        while($grade < 10){
            echo "<p>I am less than 10!</p>";
            $grade++;
        }

        echo "The condition was met, That is while the we exit the loop";
    ?>
    
</body>
</html>