<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>


<body>
<div class="container mx-auto mt-3 mb-3 py-3" style="max-width: 25rem;">
    <form action="#" method="post">
        <input type="number" name="num" id="" placeholder="Enter the number"><br><br>
        <input type="submit" name="btn_submit" value="Submit">
    </form>

    <?php

        if(isset($_POST['btn_submit'])){
            $num = $_POST['num'];
            
            echo "<form method ='post'>";
                for ($i = 1; $i <= $num ; $i++){
                    echo "Quize $i: <input type='num' name='grades' placeholder='grade'> <br> <br>";
                }
                    echo "<input type='submit' name='btn_save' value='Save'>";
            echo "</form>";
      
         if(isset($_POST['btn_save'])){
              $grades = $_POST['grades'];            

              $answer = 0;
              foreach ($grades as $grade){

                $answer = $grade++ / $num;

                 }
            echo "<p>The average of grades is" .$answer."</p>";
        }
    }

    
    ?>
</div>
</body>
</html>