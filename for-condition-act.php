<?php

echo"Number Pattern Activity";
echo"<br>";

for($i = 1; $i <= 10; $i++){
    if($i == 10){
        echo"$i";
    }elseif($i % 2 == 0 ){
        echo"$i.";

    }else{
        echo"$i-";
    }
}
?>