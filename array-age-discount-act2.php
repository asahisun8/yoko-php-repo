<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kredo Cafe</title>
</head>
<body>
<div class="container text-center">
    <form action="" method="post">
        <div class="card w-35 mx-auto mt-5">
            <div class="card-header">
                <h1 class="card-title">How many people are going to eat?</h1>
            </div>
            <div class=card-body>
            <input type="number" name="num_people" id="num_people" min="1" class="form-control mb-3">
            <input type="submit" name="btn_submit" value="Submit" class="btn btn-success w-50">
            </div>
        </div>
    </form>
<?php
    if(isset($_POST['btn_submit'])){
        $num_people = $_POST['num_people'];     

        echo"<form action='' method='post'>";       
        for($i=1; $i <= $num_people; $i++){
        echo"<input type='number' name='age[]' id='age' min='0' class='form-control mb-3'>";
        }
        echo"<input type='submit' name='btn_save' value='Save' class='btn btn-success w-50'>";
        echo"</form>";
    } 
    if(isset($_POST['btn_save'])){
        $age = $_POST['age']; 
        
        echo"<table class='table-bordered'>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>AGE</th>";
        echo"<th>PRICE</th>";
        echo"</tr>";
        echo"</thead>";
        echo"<tbody>";

       
        $prices=[0,292.5,325,308.75];
        $total = 0;
        for($j=0; $j < count($age); $j++){    
            echo"<tr>";
            echo"<td>$age[$j] </td>";
            if($age[$j] >= 0 && $age[$j] <= 5){
                echo"<td>$prices[0]</td>";
                $total += $prices[0];                    
            }
            elseif($age[$j] >= 6 && $age[$j] <= 10){            
                echo"<td>$prices[1]</td>";
                $total += $prices[1];              
            }
            elseif($age[$j] >= 60){            
                echo"<td>$prices[3]</td>";
                $total += $prices[3];              
            }
            else{            
                echo"<td>$prices[2]</td>";
                $total += $prices[2];              
            }
            echo"</tr>"; 
        }
        echo"</tbody>";
        echo"<tfoot>";
        echo"<tr>";
        echo"<th>Total Price</th>";
        echo"<th>$total</th>";
        echo"</tr>";
        echo"<tr>";
        echo"<th>Number of People</th>";
        echo"<th>".count($age)."</th>";
        echo"</tr>";
        echo"</tfoot>";
        echo"</table>";
    }
?>
</div>
</body>
</html>                 