<?php

/*$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);


echo "<br>".$dt->format("d/m/Y H:i:s");*/

for( $i = 0 ; $i < 5 ; $i++ ){
    $valor[$i] = rand(0,10);
   echo "<strong>".$valor[$i]."</strong>, ";
   for( $j = 10 ; $j < 20 ; $j++ ){
    $val = $j;
    $val +=  $valor[$i];
    echo $val.",";
   }
   echo"<br>";
}