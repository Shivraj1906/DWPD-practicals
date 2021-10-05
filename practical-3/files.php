<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $handle = fopen("test.txt", "r");

        if($handle) {
            echo "file opened successfully". "<br>";
        } else {
            echo "File opening error";
            exit(0);
        }

        $str = fread($handle, filesize("test.txt"));

        echo $str. "<br>";

        fclose($handle);

        $handle = fopen("test.txt", "w");

        if($handle)
            echo "File opened". "<br>";
        else {
            echo "file error". "<br>"; // Linux isn't letting write content in var/www/html directory
            exit(0);
        }

        fwrite($handle, "Shivraj");
    ?>
</body>
</html>