<?php
    session_start();

    $_SESSION[username] = $_POST[username];
    $_SESSION[password] = $_POST[password];

    if(strcmp($_SESSION[username], "Shivraj1906") == 0 && strcmp($_SESSION[password], "12345678") == 0) {
        header("Location: http://localhost/practical-4/loginHomePage.php");
    } else {
        echo "User not found";
        session_destroy();
    }
?>