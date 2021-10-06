<?php
    $num1 = $_GET[num1];
    $num2 = $_GET[num2];
    $buttonType = $_GET[button];

    if(strcmp($buttonType, "addition") == 0)
        echo $num1 + $num2;
    else
        echo $num1 - $num2;
?>