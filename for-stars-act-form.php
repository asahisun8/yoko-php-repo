
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
                <label for="number" class=form-label name="num1"><h2>Generate Stars</h2></label>
            </div>
            <div class="col">
                <input type="number" class="form-control mb-3" name="size" id="num1" placeholder="Enter the Size of Star">
           </div>
        </div>
                <button type=submit class="btn btn-primary w-100" name="btn_submit">Submit</button>
   
                <button type=submit class="btn btn-primary w-100" name="btn_reverse">Reverse Star</button>
     </form>

<?php
    if(isset($_POST['btn_submit'])){
        $size = $_POST['size']; #initialize the size
        
        #for loop to to creat a row
        #for($i=0;$i<$size;$i++){ ## row
                #for(){
                    #echo() //for stars
                #}
       # }
       echo "<table>";
       for($i= 0; $i < $size; $i++){
           echo "<tr>";

           for($j = 0; $j < $size; $j++){
               echo"<td>*</td>";
           }
           echo"</tr>";
       }
       echo"</table>";
    }
?>
</div>
</body>
</html>






<!-- <?php
        echo "<table>";
        for($i= 1; $i <= 7; $i++){
            echo "<tr>";

            for($j = 1; $j <= 7; $j++){
                echo"<td>" . "*" . "</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
     
?> -->