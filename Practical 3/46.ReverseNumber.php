<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number</title>
</head>

<body>
    <?php
    $num = 123;
    $revnum = 0;
    while ($num > 1) {
        $rem = $num % 10;
        $revnum = ($revnum * 10) + $rem;
        $num = ($num / 10);
    }
    echo "Reverse number of 123 is : $revnum";
    ?>

</body>

</html>