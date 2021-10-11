<?php
    session_start();

    $con = mysqli_connect("sql105.epizy.com", "epiz_29974131", "pDyjFTp0gCJcp");
    mysqli_select_db($con, "epiz_29974131_project");

    $email = $_SESSION[email];
    $task = $_GET[task];

    $query = "SELECT * FROM user WHERE email LIKE '$email'";
    $result = mysqli_query($con, $query);


    $arr = mysqli_fetch_array($result);

    $id = $arr[id];

    $query = "INSERT INTO task VALUES($id, '$task')";
    mysqli_query($con, $query);

    if(mysqli_error($con) == "") {
        header("Location: home.php");
    } else {
        echo mysqli_error($con);
    }
?>