<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Activity</title>

</head>
<body>
    <form action="" method="post">
         <label for="num" class=form-label name="num">How many countries have you been to?</label>
         <div><input type="num" class="form-control mb-3" name="num_country" id="num" placeholder="Number"></div>
         <button type=submit class="btn btn-primary w-100" name="btn_submit">Submit</button>
        
   </form>
<?php
    if(isset($_POST['btn_submit'])){
            $num_country = ($_POST['num_country']);
       
         
            echo"<form action='' method='post'>";         
            for($i = 1; $i <= $num_country; $i++){
                echo"Country $i:<input type='text' name='countries[]'><br><br>";
            }
                echo"<button type='submit' class='btn' name='btn_save'>Save</button>";   
                echo"</form>";
    }

    if(isset($_POST['btn_save'])){
           $countries = ($_POST['countries']);
                    
            echo"I have been to: <br>";

            foreach($countries as $country){
                echo $country;
                echo "<br>";
                
            }
    }      
    
?>
</div>
</body>
</html>


