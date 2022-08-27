<?php
$japanese_regions = [
   "Hokkaido" => ["Hokkaido" => "Sapporo"],
   "Chubu" => ["Ishikawa" => "Kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" =>"Nagoya"],
   "Chugoku" => ["Yamaguchi" => "Shimonoseki", "Tottori" => "Tottori"] 
];

foreach($japanese_regions as $key=> $value){

    echo"<tr>";
    echo"<td>$japanese_regions</td>";
    echo"<td>$japanese_regions[$key]</td>";
    echo"<td>$japanese_regions[$value]</td>";
    echo"</tr>";

}