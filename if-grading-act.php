<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="card border-primary mx-auto mt-3 mb-3" style="max-width: 25rem;" >
        <div class="card-header border-primary bg-light text-dark "><h4>Enter the grade of the student</h4></div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <!-- <div class="col">
                            <label class="form-label lead" for="num1">Score</label>    
                        </div> -->
                        <div class="col">
                         <input type="number" class="form-control" name="num1" id="num1" placeholder="Grade">
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
    $num1 = $_POST['num1']; 

    if($num1 >= 90 && $num1 <= 100){
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Excellent </p>";
        echo"</div>";
    }
    
    elseif($num1 >= 85 && $num1 <= 89){
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Good </p>";
        echo"</div>";
        }

    elseif($num1 >= 80 && $num1 <= 84){
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Fair </p>";
        echo"</div>";
        }

    elseif($num1 >= 75 && $num1 <= 79){
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Poor </p>";
        echo"</div>";
        }        

    elseif($num1 >= 60 && $num1 <= 74){
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Fail </p>";
        echo"</div>";
        }    
        
    else{
        echo"<div class='card fs-5 text-white bg-secondary my-5 p-3 mx-auto' style='max-width: 25rem';>";
        echo"<p> Grade : </p>";
        echo"<p class='fs-2'> Invalid Input</p>";
        echo"</div>";
        } 
    }
?>

