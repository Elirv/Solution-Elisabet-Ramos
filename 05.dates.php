<?php
echo date_default_timezone_get();
echo time();

echo "<br>";
echo date("y-m-j"); #fecha en formato y-m-d
echo "<br>";
echo date("Y-M-D"); #cualquier formato de fecha
echo "<br>";
echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");

echo "<br>";
echo date("D"); #día actual
echo "<br>";
echo date("m"); #mes de forma numérica
echo "<br>";
echo date("s-i"); # minutos con ceros a la izq.
echo "<br>";
echo "00:" . date("i");


?>