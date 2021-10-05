<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables of PHP</h1>
    <?php
        $_int = 5;
        $_float = 1.5;
        $_str = "Foobar";
        $_bool = TRUE;
        $_null = NULL;

        echo var_dump($_int). "<br>";
        echo var_dump($_float). "<br>";
        echo var_dump($_str). "<br>";
        echo var_dump($_bool). "<br>";
        echo var_dump($_null). "<br>";
    ?>
</body>
</html>