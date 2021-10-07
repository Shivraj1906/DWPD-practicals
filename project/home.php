<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <style>
        .main {
            margin: auto;
            width: 80%;
            padding: 10px;
            border: 1px solid black;
        }

        td {
            padding: 0px 30px 0px 0px;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>Tasks</h1>
        <?php
            session_start();
            $con = mysqli_connect("sql105.epizy.com", "epiz_29974131", "pDyjFTp0gCJcp");
            mysqli_select_db($con, "epiz_29974131_project");

            $query_mail = $_SESSION[email];

            $query = "SELECT * FROM user WHERE email LIKE '$query_mail'";
            $result = mysqli_query($con, $query);

            $arr = mysqli_fetch_array($result);

            $id = $arr[id];

            $query = "SELECT * FROM task WHERE id = '$id'";
            $result = mysqli_query($con, $query);
        ?>
        <table>
        <?php

            while($arr = mysqli_fetch_array($result)) {
                $task = $arr[task];
        ?>
                <tr>
                    <td><?php echo $arr[task] ?></td>
                    <td>
                        <form action="removeTask.php" method="get">
                            <input type="hidden" name="task" value="<?php echo $arr[task] ?>">
                            <input type="submit" value="mark as done">
                        </form>
                    </td>
                </tr>
        <?php
            }
        ?>
        </table>
        <br>
        <form action="addTask.php" method="get">
            <input type="text" name="task" id="task">
            <input type="submit" value="add task">
        </form>

        <br><br><br><br><br>

        <form action="logout.php" method="get">
            <input type="submit" value="log out">
        </form>
    </div>
</body>
</html>