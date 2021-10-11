<?php
    session_start();

    $con = mysqli_connect("sql105.epizy.com", "epiz_29974131", "pDyjFTp0gCJcp");
    mysqli_select_db($con, "epiz_29974131_project");

    $query_mail = $_SESSION[email];

    $query = "SELECT * FROM user WHERE email LIKE '$query_mail'";
    $result = mysqli_query($con, $query);

    $arr = mysqli_fetch_array($result);

    $id = $arr[id];
    $task = $_GET[task];

    $query = "DELETE FROM task WHERE task LIKE '$task' AND id = $id";
    echo $query;
    mysqli_query($con, $query);

    if(mysqli_error($con) == "") {
        header("Location: home.php");
    } else {
        echo mysqli_error($con);
    }
?>