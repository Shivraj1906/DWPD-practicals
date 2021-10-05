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
        $timeArr = getdate();

        $hour = $timeArr[hours];

        if($hour >= 6 && $hour <= 12)
            echo "Good morning";
        else if($hour > 12 && $hour <= 18)
            echo "Good afternoon";
        else
            echo "Good evening";
    ?>
</body>
</html>