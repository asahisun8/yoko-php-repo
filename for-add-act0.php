<?php

$start = 1;
$end = 30;
$sum = 0;

for(; $start < $end; $start++){
    if($start % 2 == 0){
        if($start == 28 ){
            echo "$start = ";
        }else{
            echo"$start + ";
       }
       $sum += $start;

        }
    }

    echo"$sum";
    // Answer should be 210.
    ?>