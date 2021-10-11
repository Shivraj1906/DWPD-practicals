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
        $email = $_POST[email];
        $password = $_POST[password];

        $con = mysqli_connect("localhost", "shivraj", "P@ssword1906");

        mysqli_select_db($con, "practical");

        mysqli_query($con, "INSERT INTO email_record (email, password) VALUES('$email', '$password')");

        echo "Data inserted". "<br>";
    ?>
</body>
</html>