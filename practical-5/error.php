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
            echo "Error";

        mysqli_query($con, "SELECT * FROM foo");

        echo mysqli_error($con);
    ?>
</body>
</html>