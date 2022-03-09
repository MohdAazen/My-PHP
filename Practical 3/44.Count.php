<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>

<body>
    <?php
    $count = 0;
    $number = 2;
    while ($count < 20) {
        $div_count = 0;
        for ($i = 1; $i <= $number; $i++) {
            if (($number % $i) == 0) {
                $div_count++;
            }
        }
        if ($div_count < 3) {
            echo $number . " , ";
            $count = $count + 1;
        }
        $number = $number + 1;
    }
    ?>

</body>

</html>