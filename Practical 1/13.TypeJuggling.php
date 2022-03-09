<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling</title>
</head>
<body>
    <?php
      $var1 = 1;
      $var2 = "20";
      $var3 = $var1 + $var2;
      $var1 = $var1 + 1.3;
      $var1 = 5 * "10 small birds";
      $var1 = 5 + "10 small puppies";
    ?>
</body>
</html>