<?php

$number =[1,2,3,4,5];

$largest = 0;

foreach ($number as $array_num){
    echo $array_num." | ";
    if ($largest < $array_num){
    $largest = $array_num;
     }
}
    echo "<p> Largest number is: ".$largest."</p>";
?>
