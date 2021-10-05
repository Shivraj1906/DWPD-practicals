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
        /**
         * The number in any given number base,
         * which forms the total of same number,
         * when each of it's digit's is raised to the
         * power of the number of digits in the number 
         * is armstrong number.
         */

         $number = 153;
         $sum = 0;
         $tempNumber = $number;
         $lengthOfNumber = strlen((string) $number);

         while($tempNumber != 0) {
             $temp = $tempNumber % 10;
             $sum = $sum + (pow($temp, $lengthOfNumber));

             $tempNumber = (int) floor($tempNumber / 10);
         }

         if($number == $sum)
            echo "Armstrong number";
         else
            echo "Not armstrong number"
    ?>
</body>
</html>