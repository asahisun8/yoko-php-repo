<!-- <?php


for($i = 1; $i <= 7; $i++){
    $answer += $i;
    echo "$answer<br>";
}
?> -->

<?php

        for($i= 1; $i <= 7; $i++){  
            // displays break line element

            for($j = 1; $j <= $i; $j++){
                // displays the stars
                echo"*";
            }
            echo"<br>";
        }
     
// number triangle activity
        for($i= 1; $i <= 5; $i++){  
            // displays break line element(br)

            for($j = 1; $j <= $i; $j++){
                // displays the numberss
                echo"$j";
            }
            echo"<br>";
        }
     
?>