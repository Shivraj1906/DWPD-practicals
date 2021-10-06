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

        mysqli_select_db($con, "practical");

        mysqli_query($con, "UPDATE another_student SET address='Vidyanagar' WHERE id=1");

        echo "data edited". "<br>";

        mysqli_query($con, "DELETE FROM another_student WHERE id=3");

        echo "Data deleted". "<br>";
    ?>
</body>
</html>