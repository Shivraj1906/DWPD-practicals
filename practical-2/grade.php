<?php
    $marks = 92;

    if($marks < 0)
        echo "Invalid";
    else if($marks < 35)
        echo "FF";
    else if($marks < 50)
        echo "DD";
    else if($marks < 55)
        echo "CD";
    else if($marks < 65)
        echo "CC";
    else if($marks < 75)
        echo "BC";
    else if($marks < 80)
        echo "BB";
    else if($marks < 85)
        echo "AB";
    else if($marks <= 100)
        echo "AA";
    else
        echo "Invalid";
?>