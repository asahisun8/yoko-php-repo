<?php
$age = array("Peter" => "35","Ben" => "37","Joe" => "43");

echo $age['Peter'];

print_r($age);

// add another element
$age['John'] = "Car";
print_r($age);

echo"<hr>Print Element using Loop";

    foreach($age as $name => $Value){   
        echo "Key = $name, Value = $Value <br>";
}

?>

$address = ["Mark" => "New York", "Chris" => "London", "Marie" => "Paris", "Kenzo" => "Istanbul", "Troye" => "Perth"];
