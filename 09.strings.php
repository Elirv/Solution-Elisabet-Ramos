<?php

#string
echo "hello";
echo "<br>";

#string con variables
$name = "Eli";
echo  $name;
echo "<br>";

#string concatenada
echo "Hello my name is " . $name;
echo "<br>";

#función reemplazar texto con mayus/min
function recMayMinString(){
    $sustit = str_replace("body", "black", "body and BODY");
    echo $sustit;
}
recMayMinString();
echo "<br>";

#función reemplazar texto sin considerar mayus/min
function susString(){
$sustituir = str_ireplace("body", "black", "body and BODY");
echo $sustituir;
}
susString();
echo "<br>";

#función string repetida
function repeatString(){
echo str_repeat("Hi ", 10);
}
repeatString();
echo "<br>";

#función longitud de string 
function lonString(){
$str = '123456789'; #devuelve 9
echo strlen($str);
}
lonString();
echo "<br>";

#funcion primera aparición de un texto
function number(){
    $findme    = 'a';
    $mystring1 = 'xyz';
    $mystring2 = 'ABC';
    $pos1 = stripos($mystring1, $findme);
    echo $pos1;
}
number();
echo "<br>";

#función en mayúscula
function mayusString(){
    $maSt = "capitalize this text";
    $maSt = strtoupper($maSt);
    echo $maSt;
}
mayusString();
echo "<br>";

#función en minúscula
function minusString(){
    $miSt = "lowerCASE tHIs TEXT";
    $miSt = strtolower($miSt);
    echo $miSt;
}
minusString();
echo "<br>";

#funcion para obtener una subcadena de texto, por posición
function substring(){
$rest = substr("abcdef", -3,-1);
echo $rest;
}
substring();

?>