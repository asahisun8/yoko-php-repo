<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="card mt-3 mb-3 py-3 mx-auto" style="max-width: 25rem;">
    <div class="card-body">
        <form action="" method="post">
            <label for="num1" class="form-label">Number</label>
            <input type="number" name="num1" class="form-control mb-3">
            <button type="submit" class="btn btn-primary w-100" name="btn_submit"><h6>Submit</h6></button>
        </form>
    </div>
</div>
<div class="text-center">
    <?php
        if(isset($_POST['btn_submit'])){
            $num1 = $_POST['num1'];
            $factorial = 1;

            if($num1 == 0){
                echo"<p text-center>The factorial of $num1 is $factorial.</p>";
            }else{
                for($i = $num1; $i >= 1; $i--){
                    $factorial *= $i;
                }
                echo"<p class='text-center'>The factorial of $num1 is $factorial.</p>";
            }
        }
    ?>
</div>
</body>
</html>