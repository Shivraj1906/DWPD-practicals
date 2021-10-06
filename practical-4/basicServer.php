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
        $text = $_GET[text];
        $hobbies = $_GET[hobby];
        $gender = $_GET[gender];

        echo "Entered text: ". $text. "<br>";
        echo "Hobbies: ". print_r($hobbies). "<br>";
        echo "Gender: ". $gender. "<br>";
    ?>
</body>
</html>