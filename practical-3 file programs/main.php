<?php
    $file1 = fopen("file1.txt", "r");
    $file2 = fopen("file2.txt", "r");
    $file3 = fopen("file3.txt", "w");

    if($file1 && $file2 && $file3) {
        echo "Files opened succesfully\n";
    } else {
        echo "File opening error\n";
        exit(0);
    }

    $str1 = fread($file1, filesize("file1.txt"));
    $str2 = fread($file2, filesize("file2.txt"));

    $final = $str1. $str2;

    if(fwrite($file3, $final)) {
        echo "File merged successfully\n";
    } else {
        echo "Something went wrong\n";
    }
?>