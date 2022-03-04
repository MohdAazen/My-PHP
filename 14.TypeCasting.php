<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
    <?php
    $count = "5";
    echo gettype($count);
    echo "<br>";
    
    settype($count,'int');
    echo gettype($count);
    ?>
</body>
</html>