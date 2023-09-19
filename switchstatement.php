<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Switch Statements</h1>
    <?php 
    // Variable Declaration
        $grade = "A";
        //Switch($variable) will scrutinuze the value of the variable against the cited cases. 
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

</body>
</html>