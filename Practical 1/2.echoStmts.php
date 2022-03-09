<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Statements</title>
</head>
<body>
    <?php
    //Displaying Strings
    echo "Hello welcome to PHP Programming <br>";

    //Displaying Strings as Multiple arguments
    echo "Hello". "Welcome". "PHP <br>";

    //Displaying Variables
    $s = "Hello, PHP";
    $x = 10;
    $y = 20;
    echo "$s <br>";
    echo $x."+".$y."=";
    echo $x + $y;

    ?>
</body>
</html>