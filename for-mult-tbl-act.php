<?php

//outer loop
echo "<table border=1>";
for($row = 1; $row<=10; $row++){

    echo "<tr>";

// echo"$row";

for($col = 1; $col<=10; $col++){
    echo"<td>" . $row * $col ."</td> ";
}
echo"</tr>";
}
echo"</table>";
