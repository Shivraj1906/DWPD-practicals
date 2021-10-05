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
        if(strcmp("FOO", "FOO") == 0)
            echo "Strings are same". "<br>";
        
        echo strcmp("a", "b"). "<br>";

        if(strcasecmp("Foo", "fOO") == 0)
            echo "Strings are same, but case insensitive". "<br>";

        echo "Occurence of man in spiderman: ". strpos("Spiderman", "man"), "<br>";

        echo "Remaining of substring from venom string: ". strstr("venom", "nom"). "<br>";

        echo "Same but case insensitive: ". stristr("venom", "O");
    ?>
</body>
</html>