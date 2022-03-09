<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String len</title>
</head>

<body>
    <?php
    $num = 12345;
    $sum = 0;
    $rem = 0;
    for ($i = 0; $i <= strlen($num); $i++) {
        $rem = $num % 10;
        $sum = $sum + $rem;
        $num = $num / 10;
    }
    echo "Sum of digits 12345 is $sum";
    ?>

</body>

</html>