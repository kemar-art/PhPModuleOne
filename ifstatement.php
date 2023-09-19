<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>