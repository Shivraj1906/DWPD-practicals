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
        $str = "1.5";

        $float = floatval($str);

        var_dump($float);

        $str = "10";

        $int = intval($str);

        var_dump($int);

        $str = strval($int);

        var_dump($str);
    ?>
</body>
</html>