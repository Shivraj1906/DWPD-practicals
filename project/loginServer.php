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
        $buttonType = $_POST[button];
        $email = $_POST[email];
        $password = $_POST[password];

        $con = mysqli_connect("sql105.epizy.com", "epiz_29974131", "pDyjFTp0gCJcp");
        mysqli_select_db($con, "epiz_29974131_project");

        if($buttonType == "register") {
            mysqli_query($con, "INSERT INTO user(email, password) VALUES('$email', '$password')");

            if(mysqli_error($con) == "") {
                echo "Data added";
                session_start();

                $_SESSION[email] = $email;
                $_SESSION[password] = $password;

                header("Location: home.php");
            } else {
                echo mysqli_error($con);
                session_destroy();
            }
        }
        else {
            $query = "SELECT * FROM user WHERE email LIKE '$email'";
            $result = mysqli_query($con, $query);
            $arr = mysqli_fetch_array($result);

            if(mysqli_error($con) == "") {
                if(strcmp($email, $arr[email]) == 0 && strcmp($password, $arr[password]) == 0) {
                    session_start();

                    $_SESSION[email] = $email;
                    $_SESSION[password] = $password;

                    header("Location: home.php");
                } else {
                    echo "Login failed, please check your details";
                    session_destroy();
                }
            } else {
                echo mysqli_error($con);
                session_destroy();
            }
        }
    ?>
</body>
</html>