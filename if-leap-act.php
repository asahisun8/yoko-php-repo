<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Leap Year?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div class="card text-dark text-center bg-light mx-auto mt-3" style="max-width: 15rem;">
    <div class="card-header bg-dark text-white"><h6>leap year</h6></div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <div class="row m-auto my-1">
                    <div class="col">
                        <input type="number" class="form-control" name="yr" id="yr" placeholder="Enter a year">
                    </div>
                </div>
        </div>
            <input type="submit" value="Check" class="btn btn-danger mt-3" name="check"></input>
            </form> 
</body>
</html>
  
</body>
</html>

<?php
 function checkYear($year){
 if ($year % 4 == 0 ){
        if($year % 100 == 0){
            if ($year % 400 == 0){
                    echo "It is a leap year.";
                } 
            else{
                echo "It is not a leap year.";
            }
        }else{
            echo "It is a leap year.";
        }       
 }else{
    echo "It is not a leap year.";
}
 }
if(isset($_POST['check'])){  
    $year = $_POST['yr'];

    checkYear($year);
}

?>