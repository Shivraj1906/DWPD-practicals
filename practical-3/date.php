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
        echo "Date: ". date("d-M-Y"). "<br>";
        print_r(getdate());
        echo "Time (in unix timestamp): ". time(). "<br>";
        var_dump(checkdate(13, 00, 0000));
        echo "Timestamp of my birthdate and time: ". mktime(11, 30, 12, 6, 19, 2003). "<br>";
    ?>
</body>
</html>