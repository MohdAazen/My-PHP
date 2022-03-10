<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
</head>
<body>
    <?php
    $person = array(
        array(
            "name" => "Vinayak Sawant",
            "mob"  => "9137234878",
            "email" => "vinayaksawant859@gmail.com"
        ),
        array(
            "name" => "Aazen Sayyed",
            "mob"  => "1234567890",
            "email" => "aazenSayyed@gmail.com"
        ),
        array(
            "name" => "Hassaan Shaikh",
            "mob"  => "1234567890",
            "email" => "hassanShaikh@gmail.com"
        )
        );
        echo "Vinayak Sawant's email-id is: ".$person[0]["email"],"<br>";
        echo "Aazen Sayyed's mobile no. is: ".$person[1]["mob"],"<br>";
    ?>
</body>
</html>