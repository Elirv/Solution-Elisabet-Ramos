<?php

#absolute value
function vaAb($num1, $num2){
    $result = $num1 + $num2;
    echo abs($result);
}
vaAb(20, 7);
echo "<br>";

#rounded value to the highest integer
echo ceil(4.3);#redondea al mayor
echo "<br>";
echo floor(4.8);#redondea al menor
echo "<br>";

#highest value received by parameter
echo max(2, 3, 1, 6, 7);
echo "<br>";

#lowest value receives by parameter
echo min(2, 3, 1, 6, 7);
echo "<br>";

#random number
echo rand(); #número aleatorio en general
echo "<br>";
echo rand(1,10); #número aleatorio entre dos numeros
echo "<br>";
function number(){
    $result1 = " ";
    echo rand();
}
number();
?>