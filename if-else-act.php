<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Act</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="card text-dark text-center bg-light mx-auto mt-3" style="max-width: 15rem;">
    <div class="card-header bg-dark text-white"><h6>Subtract if first number is greater than second number. Multiply if not!
</h6></div>
    <div class="card-body mx-auto">
        <form action="" method="get">
            <div class="row m-auto my-1">
                <div class="col"><input type="number" class="form-control" name="num1" id="" placeholder="First Number"></div>
            </div>
        </div>
            <div class="row m-auto my-1">
                <div class="col"><input type="number" class="form-control" name="num2" id="" placeholder="Second Number"></div>
        </div>
    <input type="submit" name="btnSubmit" value="Go"></input>
</form> 

</body>
</html>

<?php
 function getDisplay($num1,$num2){
     if($num1 > $num2)

return "$num1-$num2=".($num1-$num2);

else

return "$num1*$num2=".($num1*$num2);
 }

if(isset($_GET['btnSubmit'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        echo getDisplay($num1,$num2);
    }
?>



