<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Statements</title>
</head>

<body>
    <?php
    $num = 0;
    for ($i = 0; $i <= 10; $i += 2) {
        echo "$i<br/>";
        $num += $i;
    }
    echo "Sum = $num";

    ?>
</body>

</html>