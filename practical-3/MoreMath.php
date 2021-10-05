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
        echo "Modulus for float: ". fmod(12.5, 0.6). "<br>";
        echo "Min: ". min(array(1, 2, 3, 4, 5)). "<br>";
        echo "Max: ". max(array(1, 2, 3, 4, 5)). "<br>";
        echo "2^3: ". pow(2, 3). "<br>";
        echo "Square root of 9: ". sqrt(9). "<br>";
        echo "Random number: ". rand(1, 100);
    ?>
</body>
</html>