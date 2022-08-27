<?php

echo"Add Even Numbers";
echo"<br>";

$answer = 0;

for($i = 1; $i < 30; $i++){
    if($i % 2 == 0){
    $answer += $i;
}
}
echo "sum = $answer";

?>