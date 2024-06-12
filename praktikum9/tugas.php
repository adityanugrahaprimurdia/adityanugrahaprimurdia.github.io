<?php
function is_odd($number)
{
    return $number % 2 != 0;
}

function count_odd_numbers($start, $end)
{
    $count = 0;
    for ($num = $start; $num <= $end; $num++) {
        if (is_odd($num)) {
            $count++;
        }
    }
    return $count;
}

$start_number = 10;
$end_number = 123456;
$total_odd_numbers = count_odd_numbers($start_number, $end_number);

echo "Jumlah bilangan ganjil antara $start_number dan $end_number adalah: $total_odd_numbers";
