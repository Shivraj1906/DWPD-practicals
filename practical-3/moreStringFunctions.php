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
        echo ltrim("quick brown fox jump over car", "qiw0ca"). "<br>";
        echo rtrim("quick brown fox jump over car", "a0foobar"). "<br>";

        echo trim("\tfoobar\t");
    ?>
</body>
</html>