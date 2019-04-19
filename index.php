<?php
$sunny = rand(0, 1);
$rainy = rand(0, 1);

if ($sunny && $rainy) {
    $css_class = 'fas fa-rainbow';
    $text = "Rainbow";
} elseif ($sunny && !$rainy) {
    $css_class = 'sunny';
    $text = 'Sunny';
} elseif (!$sunny && $rainy) {
    $css_class = 'rain';
    $text = 'Rain';
} elseif (!$sunny && !$rainy) {
    $css_class = 'fas fa-cloud-sun';
    $text = 'Debesuota';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>title</title>

</head>
<body>
<div class="container">
    <h1 class="<?php print "$css_class"; ?>">
        <?php print $text; ?>
    </h1>
</div>
</body>
</html>