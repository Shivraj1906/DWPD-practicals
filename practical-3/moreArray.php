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
        $arr = array(5, 4, 3, 2, 1);

        sort($arr);

        print_r($arr);
        echo "<br>";

        $another_arr = array(6, 7, 8, 9);

        $final = array_merge($arr, $another_arr);

        print_r($final);
        echo "<br>";
        
        print_r(array_reverse($final));
    ?>
</body>
</html>