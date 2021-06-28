<?php

function soma(int ...$valores):float {
    return array_sum($valores);
}

echo var_dump(soma(3, 5))."<br>";
echo soma(25, 33)."<br>";
echo soma(1.5,33.5)."<br>";

