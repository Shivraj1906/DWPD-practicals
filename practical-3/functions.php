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
        function foo() {
            echo "bar". "<br>";
        }

        function add($a, $b) {
            $c = $a + $b;

            echo $c. "<br>";
        }

        foo();
        add(5, 10);
    ?>
</body>
</html>