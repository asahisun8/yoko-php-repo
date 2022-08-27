<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foo Bar Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
 <div class="card mx-auto mt-5 w-25">
    <div class="card-header">
        <h5>Foo Bar</h5>
    </div>
    <div class="card-body">
            <input type="number" class="form-control my-1" name="start" placeholder="Start">
            <input type="number" class="form-control my-1" name="end" placeholder="End">
            <button type="submit" class="btn btn-primary w-100 my-3" name="btn_submit">Submit</button>
     </div>
    <?php
        if(isset($_POST['btn_submit'])){
            $start = $_POST['start'];
            $end = $_POST['end'];

            // echo"Divisible modulo %";
            // echo"<br>";
            // echo"3;     "$div3 $start % 3;
            // echo"<br>";
            // echo"5;     "$div5 $start % 5;
            // echo"<br>";
            // echo"Division symbol/";
            // echo"<br>';
            // echo"3;     "$div3 $start / 3;
            // echo"<br>";
            // echo"5;     "$div3 $start / 5;
           
            echo"<div class='card-footer'>";
                for (; $start <= $end; $start++){
                
                     if ($start % 3 == 0 && $start % 5 == 0){
                        echo"FOOBAR";
                    }elseif($start % 3 == 0){
                        echo "FOO";
                    }elseif($start % 5 == 0){
                         echo "BAR";
                    }else {
                        echo "$start";
                     }
            
            // $start    $start<=$end  div by 3$5  div by 3 div by 5     
            // 10        T             T           F        T 
            // 11        T             F           F        F
            // 12        T             F           T        F
            // 13        T             F           F        F
            // 14        T             F           F        F
            // 15        T             F           T        T
            // 16        T             F           F        F
            // 17        T             F           F        F    
             
        }
            echo"</div>";
            
        }
        
    ?>
</div>
</form>
</body>
</html>