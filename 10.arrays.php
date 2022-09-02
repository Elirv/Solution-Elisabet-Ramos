<?php

#simple array con strings
$colors = array("red", "blue");
echo $colors[1];
echo "<br>";
var_dump($colors);
echo "<br>";
$colors = array("color1" => "yellow", "color2" => "green");
echo "esto es un arreglo con propiedades: $colors[color2]";
echo "<br>";

#array con numeros
$numbers = array(2, 2.5, 7);
var_dump($numbers);
echo "<br>";

#multidimensional array
$thingsRooms = array (
array(
    array("bed","wardrobe", "desk")),
array("tv", "armchairs","table"),
);
var_dump($thingsRooms);
echo "<br>";

#array función con la longitud
function leng(){
$arrayLength = array(2, "one", 7, 20);#cuatro de longitud
echo count($arrayLength);
}
leng ();
echo "<br>";

#función que combine dos arrays
function merge(){
    $array1    = array(1, 2, 3, 4);
    $array2    = array(5, 6, 7);
    $result = array_merge($array1, $array2);
print_r($result);
}
merge ();
echo "<br>";

#función que devuelve el último elemento del array
function lastKey(){
    $array1    = array(1, 2, 3, 'This');#usando end()
    $result = end($array1);
echo($result);
}
lastKey();
echo "<br>";
function lastKey1(){
    $array   = array(1, 2, 3, 'This one');#usando array_pop()
    $result = array_pop($array);
echo($result);
}
lastKey1();
echo "<br>";

#función que añade un elemento al array
function addKey(){
    $firstArray = array(1, 2, 3, 4);
    array_push($firstArray, "this", "this too");
print_r($firstArray);
}
addKey ();
echo "<br>";

?>