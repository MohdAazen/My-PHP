<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
</head>

<body>
    <?php
    $num = array(40, 61, 2, 22, 13);
    echo "Before Sorting: <br>";
    $arrlen = count($num);

    for ($x = 0; $x < $arrlen; $x++) {
        echo $num[$x], "<br>";
    }
    echo "<br>";
    
    sort($num);
    echo "After sorting in ascending order: <br>";
    $arrlen = count($num);

    for ($x = 0; $x < $arrlen; $x++) {
        echo $num[$x], "<br>";
    }
    echo "<br>";

    echo "After sorting in descending order: <br>";
    rsort($num);
    $arrlen = count($num);

    for ($x = 0; $x < $arrlen; $x++) {
        echo $num[$x], "<br>";
    }
    ?>
</body>

</html>