<?php

$link = "https://www.udemy.com/staticx/udemy/images/v7/logo-udemy-inverted.svg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']);

$file = fopen($basename,"w+");

fwrite($file, $content);

fclose($file);

?>


<img src="<?=$basename?>">