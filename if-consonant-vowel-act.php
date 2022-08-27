<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant or Vowel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="card text-center border-primary mx-auto mt-3 mb-3" style="max-width: 15rem;" >
        <div class="card-header border-primary bg-primary text-white "><h5>Consonant or Vowel</h5></div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <!-- <div class="col">
                            <label class="form-label lead" for="text">a letter</label>    
                        </div> -->
                        <div class="col">
                         <input type="text" class="form-control" name="text1" id="text1" placeholder="letter">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="btn_submit"><h6>Submit</h6></button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>

<?php

if(isset($_POST['btn_submit'])){
    $text1 = strtolower($_POST['text1']);

    if($text1 == 'a' or $text1 == 'i' or $text1 == 'u' or $text1 == 'e' or $text1 == 'o'){
    echo"<div class='card fs-5 text-white bg-secondary border-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
    echo"<p class='fs-2'> Vowel </p>";
    echo"</div>";
    }

    elseif(strlen($text1)>1){
    echo"<div class='card fs-5 text-white bg-secondary border-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
    echo"<p class='fs-5'> Error : You input more than 2 letters. </p>";
    echo"</div>";
    }
    elseif(is_numeric($text1)){
    echo"<div class='card fs-5 text-white bg-secondary border-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
    echo"<p class='fs-4'> Error : You input a number. </p>";
    echo"</div>";
    }
    else{
    echo"<div class='card fs-5 text-white bg-secondary border-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
    echo"<p class='fs-2'> Consonant </p>";
    echo"</div>";
    }
}       
        
?>
    