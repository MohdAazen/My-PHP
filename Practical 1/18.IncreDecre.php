<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment Decrement</title>
</head>
<body>
<?php
    $a = 3;
    echo ++$a, ": First increments then prints <br>";
    $a = 3;
    echo $a++, ": First prints then increments <br>";
    $a = 3;
    echo --$a, ": First decrements then prints <br>";
    $a = 3;
    echo $a--, ": First prints then decrements <br>";
?>
</body>
</html>