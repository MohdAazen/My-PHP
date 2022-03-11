<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implode function</title>
</head>
<body>
    <h3>Extracting variables from array </h3>
    <?php
    $course[0]="Computer Engg";
    $course[1]="Information Tech";
    $course[2]="Electronics and Telecomm";
    $text = implode(",",$course);
    echo $text;
    ?>
</body>
</html>