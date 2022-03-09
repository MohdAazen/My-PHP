<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variable</title>
</head>

<body>
    <?php
    //the Variable $num declare outside this function different values
    $num = 20;

    function local_var()
    {
        $num = 10;
        echo "local num = $num <br>";
    }
    local_var();

    //echo "num Outside local_var() =$num<br>";
    echo "Variables num outside local_var()=$num<br>";
    ?>
</body>

</html>