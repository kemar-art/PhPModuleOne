<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <?php
        $sentanceOne = "The is the first sentance";
        $sentanceTwo = "The is the second sentance";
        echo $sentanceOne .". This is the sentence that was added in the concatenation. ".$sentanceTwo;
        echo "<br/>";
        echo "<br/>";

        $myName = "kemar norton";
        echo "Making the first letter of my first name Upper Case: " .ucfirst($myName)."<br/>"; 
        echo "<br/>";
        echo "Making the first letter of my first and last name Upper Case: " .ucwords($myName)."<br/>"; 
        echo "<br/>";
        echo "Making all the letters in my name Upper Case: " .strtoupper($myName);

        echo "<hr/>";
        echo "Repeat String: " . str_repeat("a",10) . "<br/>";
        echo "Repeat String - Nested Function: " . strtoupper(str_repeat("a",10)) . "<br/>";
        echo "Get a Substring: " . substr($myName, 3, 7)."<br/>";

        echo "Get position of string: " . strpos($myName,"t")."<br/>";

        echo "Find Character 'E': " . strchr($myName, "E")."<br/>";
        echo "Find Character 'e': " . strchr($myName, "e")."<br/>";
        echo "Find Character 'm': " . strchr($myName, "m")."<br/>";
        echo "Find Character 'k': " . strchr($myName, "k")."<br/>";

        echo "Find Length of String: " . strlen($myName) ."<br/>";
        
        echo "Without Trim: ". "A" . " B C D " . "E" . "<br/>";
        echo "Trim spaces on both sides: ". "A" . trim(" B C D ") . "E" . "<br/>";
        echo "Trim spaces to the left: ". "A" . ltrim(" B C D ") . "E" . "<br/>";
        echo "Trim spaces to the right: ". "A" . rtrim(" B C D ") . "E" . "<br/>";

        echo " Replace string with another: ". str_replace("the", "my", $sentanceOne ) . "<br/>";
        
    ?>
</body>
</html>