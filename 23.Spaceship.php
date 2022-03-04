<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaceship Operator</title>
</head>
<body>
<?php
$a = 30;
$b = 30;
$c = 20;

echo $a <=> $b;
echo "<br>";
echo $a <=> $c;
echo "<br>";
echo $c <=> $b;
echo "<br>";

print("a" <=> "a"); print("<br>");
print("a" <=> "b"); print("<br>");
print("b" <=> "a"); print("<br>");
?>
</body>
</html>