<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operator</title>
</head>
<body>
<?php
$a = array("a"=>"c","b"=>"Perl");
$b = array("d"=>"Java","b"=>"Python");
var_dump($a + $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a <> $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a !== $b);
?>
</body>
</html>