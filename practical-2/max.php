<?php
    $num1 = 5;
    $num2 = 10;
    $num3 = 1;

    echo $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
?>