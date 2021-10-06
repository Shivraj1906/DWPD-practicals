<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>days</th>
            <th>cost</th>
            <th>discount</th>
            <th>More details</th>
        </tr>
        <?php
            $con = mysqli_connect("localhost", "shivraj", "P@ssword1906");

            mysqli_select_db($con, "practical");

            $result = mysqli_query($con, "SELECT * FROM tour");
            while($arr = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $arr[id] ?></td>
                <td><?php echo $arr[name] ?></td>
                <td><?php echo $arr[days]. " days" ?></td>
                <td><?php echo $arr[cost]. " rs" ?></td>
                <td><?php echo $arr[discount]. "%" ?></td>
                <td><a href="tourDetails.php?id=<?php echo $arr[id] ?>">more</a></td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>