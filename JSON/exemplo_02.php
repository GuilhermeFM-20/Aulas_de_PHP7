<?php


$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$date = json_decode($json, true);

var_dump($date);