<?php


$image = imagecreatefromjpeg("certificado.jpg");

$titlColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100,100);

$texto = "Mundos dos Deuses é o mais novo suplemento de Tormenta RPG. Mas isso você já sabe.";
$texto2 =  " O que você não sabe é que ele ém uito mais do que um mero suplemento de regras";
$texto3 = "o livroque você tem em mãos é um multiverso inteiro! Para facilitar o uso,";
$texto4 = "já que aqui há conteúdo sufi ciente para";

$fonte = "fonts/Bevan/Bevan-Regular.ttf";
$fonte2 = "fonts/Playball/Playball-Regular.ttf";

imagettftext($image, 30,0, 320, 150,$titlColor,$fonte,"CERTIFICADO");

imagettftext($image, 16,0, 130,240,$titlColor,$fonte2,utf8_decode($texto));
imagettftext($image, 16,0, 120,260, $titlColor,$fonte2,utf8_decode($texto2));
imagettftext($image, 16,0, 130,280, $titlColor,$fonte2,utf8_decode($texto3));
imagettftext($image, 16,0, 130,300, $titlColor,$fonte2,utf8_decode($texto4));

imagettftext($image, 19,0, 398, 500, $titlColor,$fonte2,"Divanei Aparecido");
imagestring($image, 3, 400, 520, utf8_decode("Concluído em ".date("d/m/Y" )), $titlColor);


header("Content-Type: image/jpeg");


imagejpeg($image);

imagedestroy($image);