<?php
    $num = 15;
    $flag = TRUE;

    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            $flag = FALSE;
            break; 
        }
    }

    if($flag)
        echo "Prime";
    else
        echo "Not prime";
?>