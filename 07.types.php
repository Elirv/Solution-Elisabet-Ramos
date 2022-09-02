<?php
#booleano
$bool = true;
var_dump($bool);
echo "<br>";
$bool = false;
var_dump($bool);
echo "<br>";

#integer
$num = 4;
var_dump($num);
echo "<br>";

#float
$float = 4.3;
var_dump($float);
echo "<br>";

#string
$stri = "I am a string";
var_dump($stri);
echo "<br>";

#array
$array1 = array(
    "fruit" => "watermelon",
    "vegetable" => "lettuce",
);
var_dump($array1);
echo "<br>";
$array = [1=>"one", 2=>2, 3=>true];
var_dump($array);
echo "<br>";

#object
$obj = (object) 'hello';
var_dump($obj);
echo "<br>";
class estoEsUnaClase
{
   
}
$objeto = new estoEsUnaClase;
var_dump($objeto);
echo "<br>";

#Null
$null = null;
var_dump($null);

?>