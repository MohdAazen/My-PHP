<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variable</title>
</head>
<body>
    <?php
    //declare global variable
    $num = 20;

    function local_var()
    {
        global $num;
        echo "Access global variable within function = $num<br>";
    }
    local_var();

    //echo "global variable outside local_var()=$num<br>";
    echo "Global variable num outside of local_var()=$num<br>";
    ?>
</body>
</html>