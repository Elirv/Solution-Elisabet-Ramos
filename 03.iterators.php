<?php

#for
$i = 0;
for ($i=0; $i <= 5; $i++){
echo $i;
}
echo"<br>";
#forEach
$frutas = ['peras', 'manzanas', 'uvas'];
foreach ($frutas as $propiedad => $valor){
echo $propiedad ." ==> ". $valor."  ";
}

echo"<br>";
#while
$i = 0;
while ($i <= 5){
    echo $i;
    $i++;
}
echo"<br>";
#do...while
$num=0;
do{
    
    $num=$num+1;
}
while($num<=5);
echo $num;

?>