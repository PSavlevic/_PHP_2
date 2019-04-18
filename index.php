<?php

$distance = rand(500, 2000);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = round(($distance * 7.5) / 100, 2);
$price = round(1.3 * $fuel_total, 2);
$text = "Nuvaziavus $distance km, masina sunaudos $fuel_total l. kuro. Kaina: $price Eur pinigu";
$money = 100;
if ($money >= $price) {
    $rez = 'Varom hebryte!!!';
} else {
    $rez = 'Biski truksta.. :(';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <?php
    print "$text" . '<br><br>';
    print $rez;
    ?>
</body>
</html>