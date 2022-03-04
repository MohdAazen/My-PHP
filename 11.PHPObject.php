<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object</title>
</head>
<body>
    <?php
    class vehicle
    {
        function car()
        {
            echo "Honda City";
        }
    }
    $obj1 = new vehicle;
    $obj1->car();
    ?>
</body>
</html>