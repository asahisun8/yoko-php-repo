<?php

$num1 = 50;
$num2 = 40;
$num3 = 10;

# option1
// Nested conditon

if ($num1 > $num2 ) {
    if ($num1 > $num3){
        echo "Gretest; $num1";
    }
}

// Using logical operator &&
if ($num2 > $num1 && $num2 > $num3){
    echo "Gretest: $num2";
}


if ($num3 > $num1 && $num3 > $num2){
    echo "Gratest: $num3";
}

// # option 2
// // $greatest = $num1;
// if ($num1 < $num2) {
//     $greatest = $num2;
// }
// if ($num2 < $num3) {
//     $greatest = $num3;
// }
// if ($num3 < $num1) {
//     $greatest = $num1;
// }
// echo"Greatest: $greatest";


?>