<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splitting and Merging arrays</title>
</head>
<body>
    <?php
    $course[0]="Computer Engg";
    $course[1]="Information Tech";
    $course[2]="Electronics and Telecomm";

    echo "<h3>Before splitting array: </h3>";
    echo $course[0], "<br>";
    echo $course[1], "<br>";
    echo $course[2], "<br>";

    echo "<h3>After splitting array: </h3>";
    $subarray = array_slice($course, 1,2);

    foreach ($subarray as $value) {
        echo "Course: $value<br>";
    }
    ?>
</body>
</html>