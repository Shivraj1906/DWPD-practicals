<?php
    $number = 12321;
    $outerTemp = $number;
    $reverse = 0;

    while($number != 0) {
        $temp = $num % 10;
        $reverse = $reverse * 10 + $temp;

        $num = floor($num / 10);
    }

    if($reverse == $outerTemp)
        echo "Palindrome";
    else
        echo "Not palindrome";
?>