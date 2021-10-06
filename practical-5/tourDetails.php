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
        $id = $_GET[id];

        $con = mysqli_connect("localhost", "shivraj", "P@ssword1906");

        mysqli_select_db($con, "practical");

        $result = mysqli_query($con, "SELECT * FROM tour_details WHERE id=$id");

        echo "Places information: ". "<br>";

        while($arr = mysqli_fetch_array($result)) {
            echo $arr[place]. "<br>";
        }
    ?>
</body>
</html>