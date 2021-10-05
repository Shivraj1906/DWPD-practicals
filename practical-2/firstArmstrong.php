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
        //1 to 9 are armstrong numbers.
        //Here we are starting from 10.

        $number = 10;
        $counter = 0;

        while($counter < 3) {
            $sum = 0;
            $tempNumber = $number;
            $lengthOfNumber = strlen((string) $number);

            while($tempNumber != 0) {
                $temp = $tempNumber % 10;
                $sum = $sum + (pow($temp, $lengthOfNumber));

                $tempNumber = (int) floor($tempNumber / 10);
            }

            if($number == $sum) {
                echo $sum. " ";
                $counter++;
            }
            $number++;
        }
    ?>
</body>
</html>