<?php

$x = rand(0, 1);

if ($x) {
    $css_class = 'sauleta';
    $text1 = 'sauleta';
} else {
    $css_class = 'lietus';
    $text1 = 'lietus';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1 class="<?php print $css_class; ?>">
        <?php print "$text1";?>
    </h1>
</div>
</body>
</html>