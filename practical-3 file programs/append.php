<?php
    $file = fopen("append.txt", "a");

    if($file) {
        echo "file opened!";
    } else {
        echo "File error!";
        exit(0);
    }

    fwrite($file, "Hello ");
?>