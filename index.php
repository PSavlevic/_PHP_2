<?php

$time = date('s');
$timer = $time % 60;
$explo = $timer<1;

$plius = date('s') + 50;

$img_height = $plius + 150 . 'px;';
$img_width = $plius + 150 . 'px;';

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .imgboom {
            background-image: url('https://www.gamemodd.com/uploads/posts/2017-05/1496003312_cs-go-c4.jpg?fbclid=IwAR0lqUFsuwBqgsnUFFHvs2x7Y8ER1wsLyTRntrNH_WROaC6WJg5e1_6I7Rg');
            background-size: cover;
            height: <?php print $img_height; ?>
            width: <?php print $img_width; ?>
        }
        .imgboom-1 {
            background-image: url('https://3c1703fe8d.site.internapcdn.net/newman/csz/news/800/2017/1-fiveofthemos.jpg?fbclid=IwAR16k40XeALTn3GFJ-KQ9vor2vWdzaigCPJW3PgSN4HsHWQXGeJGx3ojUPg');
            background-size: cover;
            height: 150px;
            width: 150px;
        }
    </style>
</head>
<body>
<div class="imgboom-<?php print $explo; ?> imgboom"></div>
<?php

print $time . '<br>';
print $timer . '<br>';
print $explo . '<br>';

?>
</body>
</html>