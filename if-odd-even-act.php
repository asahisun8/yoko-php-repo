<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="card text-center border-primary mx-auto mt-3 mb-3" style="max-width: 15rem;" >
        <div class="card-header border-primary bg-primary text-white "><h3>Odd or Even</h3></div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label lead" for="num1">Number</label>    
                        </div>
                        <div class="col">
                         <input type="number" class="form-control" name="num1" id="num1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="btn_submit"><h6>GO</h6></button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>

<?php 
if(isset($_POST['btn_submit'])){
    $num1 = $_POST['num1']; 

    if($num1 % 2 == 0){
        echo"<div class='card fs-5 text-white text-center bg-primary my-5 p-3 mx-auto' style='max-width: 15rem;'>";
        echo"<p class='fs-2'> Even </p>";
        echo"</div>";
    }else{
        echo"<div class='card fs-5 text-white  text-center bg-danger my-5 p-3  mx-auto' style='max-width: 15rem;'>";
        echo"<p class='fs-2'> Odd </p>";
        echo"</div>";
    } 
}
?>

