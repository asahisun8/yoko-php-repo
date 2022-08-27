<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!-- parent -->
    <div class="card-header text-center bg-light mx-auto mt-3" style="max-width: 45rem;">
        <div class="card-header"><h6>Display Day Act</h6></div>
        <div class="card-body mx-auto">
            <form action="" method="post">
                <input type="submit" class="btn btn-primary" value="Monday" name="day">
                <input type="submit" class="btn btn-primary" value="Tuesday" name="day">
                <input type="submit" class="btn btn-primary" value="Wednessday" name="day">
                <input type="submit" class="btn btn-primary" value="Thursday" name="day">
                <input type="submit" class="btn btn-primary" value="Friday" name="day">

            </form>
        </div>        <!-- end of card-body -->
    </div>    <!-- end of card-header -->
</div>    <!-- end of parent div-->`


</body>
</html>

<?php
    if(isset($_POST['day'])){
        $showday=$_POST['day'];
        echo"<div class='card card-body bg-light text-dark text-center mx-auto
        mt-3' style='max-width: 25em;'>$showday";
        }
?>