<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum-Activity</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!-- parent div -->
<div class="card-text-dark text-center bg-light mx-auto mt-3" style="max-width: 30em">

<div class="card-header"><h6>If Else Display Data Act-1</h6></div>
    <div class="card-body mx-auto">
        <form action="" method="post">
            <div class="row m-auto">
                <div class="col text-end">
                    <label for="num1">Enter First number</label>
                </div>

                <div class="col">
                    <input type="number" name="num1" id="num1" placeholder="First number">
                </div>
                <br>
            </div>
            <br>
            <div class="row m-auto"> 
                <div class="col text-end">
                    <label for="num2"> Enter Second Number</label>
                </div>
                <div class="col">
                    <input type="number" name="num2" placeholder="Second number">
                </div>
                <input type="submit" value="Compute" class="btn btn-primary mt-3" name="compute"></input>
              </form>
            </div><!-- end of card-body -->
    </div><!-- end of car-header -->
</div><!-- end of parent div -->

</body>
</html>
<?php
    if(isset($_POST ['compute'])){
        $num_1=$_POST['num1'];
        $num_2=$_POST['num2'];
        $sum=$num_1 + $num_2;

        echo "<div class='card card-body bg-primary text-white text-center mx-auto mt-3' style='max-width: 25rem;'> The sum is: $sum";
    }
    
    ?>

        