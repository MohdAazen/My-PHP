<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifiying an array</title>
</head>
<body>
    <h1>Modifiying an array</h1>
    <?php
    $course[0]="Computer Engg";
    $course[1]="Information Tech";
    $course[2]="Electronics and Telecomm";

    echo "<h3>Before modification: </h3>";
    echo $course[0], "<br>";
    echo $course[1], "<br>";
    echo $course[2], "<br>";

    echo "<h3>After modification: </h3>";
    $course[2] = "Mechanical Engg.";
    $course[3] = "Civil Engg.";
    for ($i=0; $i < count($course) ; $i++) { 
        echo $course[$i], "<br>";
    }
    ?>
</body>
</html>
