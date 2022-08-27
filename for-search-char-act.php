<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Character</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mx-auto mt-3 mb-3 py-3" style="max-width: 25rem;">
    <form action="" method="post">
         <label for="text" class=form-label name="num1">Word</label>
         <input type="text" class="form-control mb-3" name="word" id="word">
         <button type=submit class="btn btn-primary w-100" name="btn_submit">Submit</button>
   </form>

<?php
    if(isset($_POST['btn_submit'])){
            $word = strtolower($_POST['word']);
           
            // for($i = 0; $i < strlen($word); $i++){
            // }
            $letter = "";
            $count = 0;

            for($i = 0; $i < strlen($word); $i++){
                    $letter = substr($word,$i,1);

                    if($letter == "a" || $letter ==  "e" || $letter == "i" || $letter == "o" || $letter == "u" ){
                        $count++; 
                    }
                    // $answer = strlen($letter)$$; 
                }
            
            echo"The number of vowels in the word $word is $count.";
            // echo"The number of vowels in the word $word is $answer.";
    }
           
          
    
?>
</div>
</body>
</html>


