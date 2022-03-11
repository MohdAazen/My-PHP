<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using extract() method</title>
</head>
<body>
    <h3>Extracting variables from array</h3>
    <?php
    $course["CO"]="Computer Engg.";
    $course["IF"]="Information Tech.";
    $course["EJ"]="Electronics and Telecomm.";

    extract($course);
    echo"CO=$CO<br>";
    echo"IF=$IF<br>";
    echo"EJ=$EJ<br>";
    ?>
</body>
</html>