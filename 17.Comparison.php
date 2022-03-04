<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
<?php
    $a = 20;
    $b = 10;
    $c = 20;
    var_dump($a==$c);
    echo "<br>";
    var_dump($a!=$b);
    echo "<br>";
    var_dump($a<>$b);
    echo "<br>";
    var_dump($a===$c);
    echo "<br>";
    var_dump($a!==$c);
    echo "<br>";
    var_dump($a<$b);
    echo "<br>";
    var_dump($a>$b);
    echo "<br>";
    var_dump($a<=$b);
    echo "<br>";
    var_dump($a>=$b);
    echo "<br>";
?>
</body>
</html>