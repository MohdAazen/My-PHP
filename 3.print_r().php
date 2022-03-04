<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r() statement</title>
</head>
<body>
    <?php
    $var1 = "Hello PHP";   //String Variable
    $var2 = 101;           //Integer variable
    $arr = array('0'=> "Welcome", '1'=> "to", '2'=> "PHP");  // Array Variable
    // printing the variables
    print_r($var1);
    echo "<br>";
    print_r($var2);
    echo "<br>";
    print_r($arr);
    ?>
</body>
</html>