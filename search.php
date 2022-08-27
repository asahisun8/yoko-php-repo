<?php



    $word = "apple";


    echo strlen($word);
    echo"<br>";


    for($i = 0; $i < strlen($word); $i++){
    }      
    echo"$i";    

    echo"<br>";


    $word = "apple";

    for($i = 0; $i < strlen($word); $i++){
    echo"$i";       
    }      

    echo"<br>";

    $word = "apple";

    for($i = 0; $i < strlen($word); $i++){
    // echo"$i";    
    echo substr($word,$i,1); 
    }  
    echo"<br>";

    
    $letter = substr($word,0,1);
    if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
        echo substr($word,0,1); 
           }

           $letter = substr($word,1,1);
           if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
               echo substr($word,1,1); 
                  }
                  $letter = substr($word,2,1);
                  if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                      echo substr($word,2,1); 
                         }
                         $letter = substr($word,3,1);
                         if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                             echo substr($word,3,1); 
                                }
                                $letter = substr($word,4,1);
                                if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                                    echo substr($word,4,1); 
                                       }
echo"<br>";

$word = "apple";

for($j = 0; substr($word,$j,1) < (strlen($word) - 1); $j++){
    $letter = substr($word,$j,1);
    if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e' or $letter == "o" ){
        // echo substr($letter);
        echo strlen($letter); 
    }
}
                                    
                                   
                                            //   $letter = substr($word,1,1);
                                            //   if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                                            //       echo substr($word,1,1); 
                                            //          }
                                            //          $letter = substr($word,2,1);
                                            //          if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                                            //              echo substr($word,2,1); 
                                            //                 }
                                            //                 $letter = substr($word,3,1);
                                            //                 if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                                            //                     echo substr($word,3,1); 
                                            //                        }
                                            //                        $letter = substr($word,4,1);
                                            //                        if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e'or $letter == "o" ){
                                            //                            echo substr($word,4,1); 
                                            //                               }
if($letter == 'a'or $letter ==  'i' or $letter == 'u' or $letter == 'e' or $letter == "o" ){
  echo strlen($letter); 
 
}
?>


