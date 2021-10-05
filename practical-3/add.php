<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        $matrix1 = [
            [1, 2],
            [3, 4]
        ];

        $matrix2 = [
            [0, 1],
            [1, 0]
        ];

        $answer = [
            [$matrix1[0][0] + $matrix2[0][0], $matrix1[0][1] + $matrix2[0][1]],
            [$matrix1[1][0] + $matrix2[1][0], $matrix1[1][1] + $matrix2[1][1]]
        ];
    ?>

    <table>
        <tr>
            <td ><?php echo $answer[0][0] ?></td>
            <td><?php echo $answer[0][1] ?></td>
        </tr>
        <tr>
            <td ><?php echo $answer[1][0] ?></td>
            <td><?php echo $answer[1][1] ?></td>
        </tr>
    </table>
</body>
</html>