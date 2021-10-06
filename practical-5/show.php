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
        <?php
            $con = mysqli_connect("localhost", "shivraj", "P@ssword1906");

            mysqli_select_db($con, "practical");

            $result = mysqli_query($con, "SELECT * FROM student");
            while($arr = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $arr[roll_no] ?></td>
                <td><?php echo $arr[name] ?></td>
                <td><?php echo $arr[standard] ?></td>
                <td><?php echo $arr[division] ?></td>
                <td><?php echo $arr[city] ?></td>
            </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>