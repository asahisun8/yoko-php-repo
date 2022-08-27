<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Activity</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->

</head>
<body>

<div class="container mx-auto mt-3 mb-3 py-3" style="max-width: 25rem;">
    <form action="" method="post">
        <div class="row m-auto mb-2">
            <div class="col">
                <label for="number" class=form-label name="num1">Enter number of rows</label>
            </div>
            <div class="col">
                <input type="number" class="form-control mb-3" name="num1" id="num1">
           </div>
        </div>
   
        <div class="row m-auto mb-2">
            <div class="col">
               <label for="number" class=form-label name="num2">Enter number of columns</label>
            </div>
            <div class="col">
               <input type="number" class="form-control mb-3" name="num2" id="num2">
            </div>
           
            <button type=submit class="btn btn-primary w-100" name="btn_submit">Generate</button>
        </div>
    </form>


<?php
    if(isset($_POST['btn_submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $table  =  ''; # initalize the table and set it into an empty string
        $table .='<table border="1" height="200px">'; #to generate a table with the height of 200 px
        for($i= 0; $i < $num1; $i++){ #for loop to generate the row
            $table.='<tr>';
            for($j=0; $j < $num2 ; $j++){ #for loop to generate the column
                $table.='<td width="50px">*</td>';
            }
            $table.='</tr>';
        }
        $table.='</table>'; #to close the table element
     }
        echo "<br>".$table; #display the  table
?>
</div>
</body>
</html>



