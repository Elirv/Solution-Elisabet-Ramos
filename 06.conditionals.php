<?php

#dia actual
$day = date("D");

if ($day === "Monday"){
    echo "We are on Monday";
}
echo "<br>";

#mes actual
$month = date("F");

if ($month === "October"){
    echo "We are in October";
}else{
    echo date("F");
    }
echo "<br>";

#doble condición
$min = date('s'); #cambiar a segundos = i
if ($min<10){
    echo "The current minute is less than 10";
}else if ($min>15){
    echo "The current minute is more than 15";
}else{
    echo "Does not meet any conditions";
}
echo "<br>";

#Switch
// $week = ['L', 'M', 'X', 'J', 'V', 'W'];
$dayWeek = date("D");
var_dump($dayWeek);
echo "<br>";

switch ($dayWeek){
    case "Mon": 
        echo "Monday";
    break;
    case "Tue": 
        echo "Tuesday";
    break; 
    case "Wed": 
        echo "Wednesday";
    break; 
    case "Thu": 
        echo "Thursday";
    break; 
    case "Fri":
        echo "Friday";
    break;
    default: echo "Weekend!";
}

?>