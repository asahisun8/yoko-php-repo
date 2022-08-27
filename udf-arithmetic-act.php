<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Arithmetic Activity</title>
   <style>
       p {
            margin-bottom: 0;
       }
   </style>
</head>
<body>
    <div class="card mt-5 mx-auto w-25 text-center">
        <div class="card-header">
            <h1 class="h3">Arithmetic</h1>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="row mb-2">
                    <div class="col">
                        <label for="num1">First Number</label>
                    </div>

                    <div class="col">
                        <input type="number" class="form-control" name="num1" id="num1">
                    </div>
                </div>
                    <div class="row mb-2">
                        <div class="col">
                            <label for="num2">Second Number</label>
                        </div>

                        <div class="col">
                            <input type="number" class="form-control" name="num2" id="num2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary w-100" name="btn_submit"><h6>Submit</h6></button>
                       </div>
                   </div>
            </form>
        </div>
    </div> 
</body>
</html>

</body>

</html>

<?php
if (isset($_POST['btn_submit'])) {
   $num1 = $_POST['num1'];
   $num2 = $_POST['num2'];


   
 

  

   echo "<div class='card my-5 p-3 mx-auto w-25 bg-dark text-light'>";
   echo "<p>1st number: <span class='h5'>$num1</span></p>";
   echo "<p>2nd number: <span class='h5'>$num2</span></p>";
   echo "<hr>";
    add($num1, $num2);
    subt($num1, $num2);
    multi($num1, $num2);
    divid($num1, $num2);
 

   echo "</div>";
}

function add($num1, $num2){
    $sum = $num1 + $num2;
    echo "<p>Sum = $sum</p>";
}   

function subt($num1, $num2){
    $diff = $num1 - $num2;
    echo "<p>Difference = $diff</p>";
}

function multi($num1, $num2){
    $prod = $num1 * $num2;
    echo "<p>Product = $prod</p>";
}

function divid($num1, $num2){
    $quo = $num1 / $num2;
    echo "<p>Quotient = $quo</p>";
}


?>