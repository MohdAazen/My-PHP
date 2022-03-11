<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using compact() method</title>
</head>
<body>
    <?php
    $var1 = "PHP";
    $var2 = "JAVA";
    $var3 = compact("var1","var2");

    print_r($var3);

    ?>
</body>
</html>