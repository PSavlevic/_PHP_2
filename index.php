<?php
$turis = 40;
$avg = 15;
$max = rand(10, 40);
$dienu =  floor(($turis + $max) / $avg);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>uzduotis</title>
    </head>
    <body>
        <h1>Po keliu dienu kils barnis?</h1>
        <ul>
            <li>
            Po <?php print $dienu . ' dienu' . ' (' . date('Y-m-d', strtotime("+$dienu days")) . ')' ?> pirk geliu ir sampano, jeigu nori, kad zmona siuksles pati isnestu.
            </li>
        </ul>
    </body>
</html>