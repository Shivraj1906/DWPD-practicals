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

        mysqli_select_db($con, "practical");

        $result = mysqli_query($con, "SELECT * FROM user");

        while($arr = mysqli_fetch_array($result)) {
            echo "ID: ". $arr[id]. "<br>";
            echo "Name: ". $arr[name]. "<br>";

            echo "<br>";
        }

        $result = mysqli_query($con, "SELECT * FROM user");

        while($arr = mysqli_fetch_row($result)) {
            print_r($result);
        }
    ?>
</body>
</html>