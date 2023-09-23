<?php
    $title = "Functions";
    include"includes/header.php";
?>
    <br/>
    <br/>
    <h1 class="text-center">Working with Fuctions</h1>

    <div class="text-center">
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
            echo "The product of two numbers is: $result";
        ?>
    </div>  
    <br/>
    <br/>
<div class="text-center">
    <?php
      require"includes/footer.php";
    ?>
</div>