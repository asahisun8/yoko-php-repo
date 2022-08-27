<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card mx-auto mt-3 mb-3 py-3" style="max-width: 15rem;">
    <div class="card-body">
        <form action="" method="post">
            <div>     
                <label for="number" class=form-label name="num1">Row</label>
                <input type="number" class="form-control mb-3" name="num1" id="num1">
            <div>     
                <label for="number" class=form-label name="num2">Col</label>
                <input type="number" class="form-control mb-3" name="num2" id="num2">
            </div>
        
            <div>     
                <button type=submit class="btn btn-primary w-100" name="btn_submit">Submit</button>
            </div>
        </form>
    </div>
<?php
   if(isset($_POST['btn_submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    
        echo "<table border=1>";
        for($i = 1; $i<=$num1; $i++){

            echo "<tr>";

        // echo"$row";

        for($j = 1; $j<=$num2; $j++){
            echo"<td>" . "*"."</td> ";
        }
        echo"</tr>";
        }
        echo"</table>";
    }
?>
</div>  
</body>
</html>