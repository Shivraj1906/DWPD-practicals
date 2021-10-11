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

        // mysqli_query($con, "CREATE TABLE student(roll_no INT PRIMARY KEY, name VARCHAR(20), standard INT, division CHAR, city VARCHAR(20))");

        $rollNo = $_GET[roll];
        $name = $_GET[name];
        $std = $_GET[std];
        $div = $_GET[div];
        $city = $_GET[city];

        $query = "INSERT INTO student VALUES($rollNo, '$name', $std, '$div', '$city')";

        
        mysqli_query($con, $query);

        echo "Data added";

    ?>
</body>
</html>