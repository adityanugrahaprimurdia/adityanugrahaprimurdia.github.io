<?php
    $bilanganPrima = 0;
    for ($i = 2; $i <= 50; $i++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            $bilanganPrima++;
        }
    }
    echo "Banyaknya bilangan prima dari 1 samapai 50 adalah: " . $bilanganPrima;
?>
