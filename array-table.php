<?php

    $prices=[0,292.5,325,308.75];
  
    echo"<table border=1>";
    echo"<thead class='dark'>";
    echo"<tr>";
    echo"<th>AGE</th>";
    echo"<th>PRICE</th>";
    echo"</tr>";
    echo"</thead>";
    echo"<tbody>";
    $total = 0;
   
        echo"<tr>";
        echo"<td>80</td>";
            
            echo"<td>$prices[3]</td>";
            echo"<tr>";
            echo"<td>46</td>";
       
            echo"<td>$prices[2]</td>";
        echo"</tr>";
    echo"</tbody>";

    echo"<tfoot class='danger'>";
    echo"<tr>";
    echo"<th>Total Price</th>";
    echo"<th>(46+80)</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<th>Number of People</th>";
    echo"<th>2</th>";
    echo"</tr>";
    echo"</tfoot>";
    echo"</table>";


    foreach ($prices as $price) {
    $total += $price;
}
  echo"$total";

?>