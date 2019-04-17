<?php
$string = 'masina';
$integer = 4;
$float = 4.15;
$boolean = true;
$xuy = null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>uzduotis</title>
    <style>
        ul li {
            list-style-type: none;
        }
    </style>
</head>
<body>
    <ul>
        <li><?php print "String: $string"; ?></li>
        <li><?php print "Integer: $integer"; ?></li>
        <li><?php print "Float: $float"; ?></li>
        <li><?php print "Boolean: $boolean"; ?></li>
        <li><?php print "XUY: $xuy"; ?></li>
    </ul>
</body>
</html>