<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logical Operators</title>
</head>
<body>
<?php
        $a = 20;
        $b = 10;

        if ($a == 20 and $b == 10)
        echo "True <br>";

        if ($a == 20 or $b == 30)
        echo "True <br>";

        if ($a == 20 xor $b == 5)
        echo "True <br>";

        if ($a == 20 && $b == 20)
        echo "True <br>";

        if ($a == 20 || $b == 20)
        echo "True <br>";
?>
</body>
</html>