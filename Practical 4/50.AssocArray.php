<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
    $capital = array("Mumbai" => "Maharashtra", "Goa" => "Panaji", "Bihar" => "Patna");
    print_r($capital);
    echo "<br>";
    echo "Mumbai is a capital of ".$capital ["Mumbai"];
    ?>
</body>
</html>