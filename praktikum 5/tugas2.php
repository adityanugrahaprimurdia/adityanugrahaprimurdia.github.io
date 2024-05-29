<?php
    echo "Bilangan Bulat 5 s/d 100 yang Berkelipatan 10 adalah: <br>";
    $bil = 5;
    while ($bil <= 100) {
        if ($bil % 10 == 0) {
            echo $bil . "<br>";
        }
        $bil++;
    }
?>
