<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$foto = "data:".$fileinfo->file($filename).";base64," . $base64;

?>

<a href="<?=$foto?>" target="_blank">Link Foto</a>

<img src="<?=$foto?>">