<?php
    include"includes/header.php";
?>

    <div class="row justify-content-center">
            <div class="col-4">
                <h1>Do While Loop</h1>
                <?php
                    $grade = 0;
                    do{
                        echo "<p>THE IS THE DO WHILE LOOP</p>";
                        $grade++;
                    }
                    while($grade < 10)
                ?>
            </div>
            <div class="col-4">
                <h1>While While Loop</h1>
                <?php
                    $grade = 0;
                    while($grade < 10){
                        echo "<p>I am less than 10!</p>";
                        $grade++;
                    }

                    echo "The condition was met, That is while the we exit the loop";
                ?>
            </div>
    </div>

    <br/>
    <br/>
<div class="text-center">
    <?php
      require"includes/footer.php";
    ?>
</div>      