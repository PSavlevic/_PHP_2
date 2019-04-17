<?php

    $eur1 = rand(1, 100);
    $eur2 = rand(101, 200);
    $eur3 = rand(201, 300);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>uzduotis</title>
    </head>
    <body>
        <div>
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paėmei <?php print $eur1; ?> euru.</h3>
            <h4>Su dviem kabanciais grazinsi <?php print $eur3; ?> euru.</h4>
            <h2>Su vienu kabanciu grazinsi <?php print $eur3; ?> euru.</h2>
        </div>
    </body>
</html>