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
        echo "Number of elements in array: ". count(array(1, 2, 3, 4, 5)). "<br>";
        list($a, $b) = array(1, 2);
        echo $a. "<br>";
        echo $b. "<br>";

        $arr = array(1, 2, 3, 4, 5);

        var_dump(in_array(2, $arr));

        echo "<br>";

        echo current($arr). "<br>";
        echo next($arr). "<br>";
        echo prev($arr). "<br>";
        echo end($arr). "<br>";
        print_r(each($arr));
        echo "<br>";
        reset($arr); //resets the position of virtual counter
    ?>
</body>
</html>