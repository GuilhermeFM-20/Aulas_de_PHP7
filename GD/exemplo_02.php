<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlColor = imagecolorallocate($image, 0, 0, 0);

$gray = imagecolorallocate($image, 100, 100,100);

$texto = "Mundos dos Deuses é o mais novo suplemento de Tormenta RPG. Mas isso você já sabe.";
$texto2 =  " O que você não sabe é que ele ém uito mais do que um mero suplemento de regras";
$texto3 = "o livroque você tem em mãos é um multiverso inteiro! Para facilitar o uso,";
$texto4 = "já que aqui há conteúdo sufi ciente para";

imagestring($image, 5, 450, 150, "CERTIFICADO", $titlColor);

imagestring($image, 5, 130,240,utf8_decode($texto), $titlColor);
imagestring($image, 5, 130,250,utf8_decode($texto2), $titlColor);
imagestring($image, 5, 130,260,utf8_decode($texto3), $titlColor);
imagestring($image, 5, 130,270,utf8_decode($texto4), $titlColor);

imagestring($image, 5, 420, 350, "Divanei Aparecido", $titlColor);
imagestring($image, 5, 395, 370, utf8_decode("Concluído em ".date("d/m/Y" )), $titlColor);


header("Content-Type: image/jpeg");

imagejpeg($image, "img/certificado4.jpg", 2000);

//imagejpeg($image);

imagedestroy($image);