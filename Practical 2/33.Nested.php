<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested if Else</title>
</head>

<body>
    <?php
    $per = 65;
    if ($per >= 75) {
        echo "Distinction";
    } else if ($per < 75 && $per >= 60) {
        echo "First Class";
    } else if ($per < 60 && $per >= 45) {
        echo "Second Class";
    } else if ($per < 45 && $per >= 40) {
        echo "Pass Class";
    } else {
        echo "Sorry Fail";
    }
    ?>
</body>

</html>