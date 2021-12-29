<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);


$preto = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 0, 255);

imagestring($image, 5, 60, 120, "Curso em PHP 7", $blue);

imagepng($image);

imagedestroy($image);