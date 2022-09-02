<?php

#funcion suma
function sum($num1, $num2){
    $result = $num1 + $num2;
    echo $result;
}
sum(20, 7);
echo "<br>";

#función multiplicar
function mult($num1, $num2){
    $result = $num1 * $num2;
    echo $result;
    }
mult (4,5);
echo "<br>";

// #función dividir
function div($num1, $num2){
    $result = $num1 / $num2;
    echo $result;
    }
div (4,5);
echo "<br>";

#función de numeros y operador
function operaciones($num1, $num2, $operator) {
    $result = 0;
    if($operator == "add") {
    $result = $num1 + $num2;
    }else if($operator == "multiply") {
    $result = $num1 * $num2;
    }else if($operator == "divide") {
    $result = $num1 / $num2;
    }
    return $result;
}
echo operaciones(10, 8, "multiply");

?>