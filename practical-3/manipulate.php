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
        $str = "Hello World";

        $arr = str_split($str);

        print_r($arr);
        echo "<br>";

        $arr = str_split($str, 2);

        print_r($arr);
    ?>
</body>
</html>