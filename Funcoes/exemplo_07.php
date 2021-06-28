<?php

function soma(int ...$valores){
    return array_sum($valores);
}

echo soma(3, 5)."<br>";
echo soma(25, 33)."<br>";
echo soma(1.5,33.5)."<br>";