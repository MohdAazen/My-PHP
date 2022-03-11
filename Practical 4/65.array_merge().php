<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_merge()</title>
</head>
<body>
    <?php
    $sem3 = array("Object Oriented Programming", "Principle of Database", "Data Structure");
    $sem4 = array("Database Management", "Java Programming", "Software Engg.", "Computer Network");

    $subject = array_merge($sem3,$sem4);

    foreach ($subject as $value) {
        echo "Subject: $value<br>";
    }
    ?>
</body>
</html>