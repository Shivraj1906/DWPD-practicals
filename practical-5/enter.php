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

        $query = "CREATE TABLE another_student(
                id INT PRIMARY KEY,
                name VARCHAR(20),
                address VARCHAR(50),
                department VARCHAR(20)
            )";

        mysqli_query($con, $query);

        mysqli_query($con, "INSERT INTO another_student VALUES(1, 'Shivraj', 'VVN', 'Computer')");
        mysqli_query($con, "INSERT INTO another_student VALUES(2, 'Vraj', 'Nadiad', 'Computer')");
        mysqli_query($con, "INSERT INTO another_student VALUES(3, 'Vasu', 'Vapi', 'Computer')");

        echo "data entered";
    ?>
</body>
</html>