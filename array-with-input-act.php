<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="country" id="" placeholder="Enter number of countries"><br><br>
        <input type="submit" name="btn_submit" value="Submit">
    </form>

    <?php

        if(isset($_POST['btn_submit'])){

            $num_country = $_POST['country'];

            
            echo "<form method ='post'>";
                for ($i = 1; $i <= $num_country ; $i++){
                    echo "Country $i: <input type='text' name='countries[]'> <br> <br>";
                }
                    echo "<input type='submit' name='btn_save' value='Save'>";
            echo "</form>";
        }

        if(isset($_POST['btn_save'])){
            $countries = $_POST['countries'];
            
            echo "You have been to: <br>";

            foreach($countries as $country){
                echo $country;
                echo "<br>";
            }

        }
    
    ?>
</body>
</html>