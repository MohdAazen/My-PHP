<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesing MD Array 2</title>
</head>
<body>
    <?php
    $mobile = array
    (
        array("LG",20,18),
        array("Sony",30,13),
        array("Redmi",10,2),
        array("Samsung",40,15),
    );

    for ($row=0; $row < 4; $row++) 
    { 
        echo "<p><b>Row Number $row</b></p>";
        echo "<ul>";
        for ($col=0; $col < 3 ; $col++) { 
            echo "<li>".$mobile[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>