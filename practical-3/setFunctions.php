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
        $var = 5;

        echo gettype($var). "<br>";
        
        settype($var, "string");

        echo gettype($var). "<br>";

        echo isset($var). "<br>";

        unset($var);
        
        var_dump($var);
    ?>
</body>
</html>