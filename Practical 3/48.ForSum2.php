<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Example 2</title>
</head>
 
<body>
    <?php
    $sum = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo "$i<br/>";
        $sum = $sum + $i;
    }
    echo "sum=$sum<br/>";
    $average = (float)$sum / $i;
    echo "Average=$average";
    ?>

</body>

</html>