<?php
    $title = "Functions";
    include"includes/header.php";
?>
    
    <h1>Working with Fuctions</h1>

    <?php
        function writeMessage(){
            echo "I was called from a fuection";
        }
        
        function additionFunction($num1, $num2){
            $sum = $num1 + $num2;        
            echo "The sum of $num1 and $num2 is: $sum";
        }

        function returnProduct($num1, $num2){
            $prod = $num1 + $num2;
            return $prod;
        }


        writeMessage();
        echo "<br/>";
        echo "<br/>";
        additionFunction(7, 8);
        echo "<br/>";
        echo "<br/>";
        $result = returnProduct(17, 8);
        echo $result;
    ?>
<?php
    require"includes/footer.php";
?>