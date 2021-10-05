<?php
    $num = 123;
    $reverse = 0;
    while($num != 0) {
        $temp = $num % 10;
        $reverse = $reverse * 10 + $temp;

        $num = floor($num / 10);
    }

    echo $reverse;
?>