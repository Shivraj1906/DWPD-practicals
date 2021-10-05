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
        $simple = array(1, 2, 3, 4, 5);

        print_r($simple);
        echo "<br>";

        $associative = array(
            "first" => "First Element",
            "second" => "Second Element"
        );

        print_r($associative);
        echo "<br>";

        $multi = array(
            1,
            array(
                2, 3
            ),
            4,
            5
        );

        print_r($multi);
        echo "<br>";
    ?>
</body>
</html>