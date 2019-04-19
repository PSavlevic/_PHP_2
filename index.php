<?php

$sek = date ('s');
if (($sek % 2) == 1) {
    $css_class = "kvadratas";
} elseif (($sek % 2) == 0) {
    $css_class = "apskritimas";

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>title</title>

</head>
<body>
    <div class="container">
       <div class="<?php print $css_class?>">
           <div class="flex">
               <h2><?php print $sek; ?></h2>
           </div>

       </div>

    </div>
</body>
</html>