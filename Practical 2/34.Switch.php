<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>

<body>
    <?php
    $ch = 1;
    $a = 20;
    $b = 10;

    switch ($ch) {
        case '1':
            $c = $a + $b;
            echo "Addition=" . $c;
            break;

        case '2':
            $c = $a - $b;
            echo "Subtraction=" . $c;
            break;

        case '3':
            $c = $a * $b;
            echo "Multiplication=" . $c;
            break;

        case '4':
            $c = $a / $b;
            echo "Division=" . $c;
            break;
            
        default:
            echo "Wrong Choice";
            break;
    }
    ?>
</body>

</html>