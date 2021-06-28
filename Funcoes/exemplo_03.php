<?php

function ola($texto = "mundo", $periodo = "bom dia"){

    return "Olá $texto  $periodo  <br> ";
}

echo ola();
echo ola("Glaucio!", "boa noite");
echo ola("João!");