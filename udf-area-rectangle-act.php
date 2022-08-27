<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="card mx-auto mt-5 w-25 text-center">
    <div class="card-header  bg-primary text-light">
        <h1 class="h3">Area of Rectangle</h1>
    </div>
    
    <div class="card-body">
    <form action="" method="post">
           <div class="row m-auto mb-2">
               <div class="col">
                    <label for="num1">Length</label>
               </div>

               <div class="col">
                   <input type="number" class="form-control" name="num1" id="num1">
               </div>

            </div>
       
           <div class="row m-auto mb-2">
              <div class="col">
                    <label for="num2">Width</label>
               </div>

              <div class="col">
                    <input type="number" class="form-control" name="num2" id="num2">
              </div>
          </div>

          <div class="row">
              <div class="col"></div>
              <button type="submit" class="btn btn-primary w-100" name="btn_submit"><h6>Submit</h6></button>
         </div>

    </div>
    </form>
   
</div>
        
</body>
</html>

<?php
if(isset($_POST['btn_submit'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

echo"<div class='card fs-5 my-5 p-3 mx-auto w-25 bg-light text-center'>";

$answer=multi($num1, $num2);
echo"<p>Area : $answer.</P>";
echo"</div>";

}

function multi($num1, $num2){
    return $num1 * $num2 ;

}

?>