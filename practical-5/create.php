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
        $con = mysqli_connect("localhost", "shivraj", "P@ssword1906");

        if($con)
            echo "Connected". "<br>";
        else
            echo "Error". "<br>";

        mysqli_query($con, "CREATE DATABASE phpTest");

        echo "database created". "<br>";

        mysqli_query($con, "DROP DATABASE phpTest");

        echo "Database dropped". "<br>";
    ?>
</body>
</html>