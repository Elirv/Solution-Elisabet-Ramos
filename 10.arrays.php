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
$arrayLength = array(2, "one", 7, 20);#cuatro de longitud
echo count($arrayLength);
echo "<br>";

#función que combine dos arrays
echo "hello";
echo "<br>";

#función que devuelve el último elemento del array
echo "hello";
echo "<br>";

#función que añade un elemento al array
echo "hello";
echo "<br>";
?>