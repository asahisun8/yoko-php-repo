<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starts With Ends With</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="card border-primary mx-auto mt-3 mb-3 py-3" style="max-width: 25rem;">
        <div class="card-body">
            <form action="" method="post">
 
               <label for="num1" class="form-label">Start</label>
                <input type="number"class="form-control mb-3" name="num1" id="num1">
 
                <label for="num2" class="form-label">End</label>
                <input type="number"class="form-control mb-3" name="num2" id="num2">
 
                <button class="btn btn-primary w-100" name="btn_submit">submit</button>

            </form>
        </div>
    </div>
    <div class="text-center w-100">
    <?php
      if(isset($_POST['btn_submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

            if($num1<$num2){   
                for($i = $num1; $i<=$num2; $i++){
                    echo"<span style='margin-right:10px';>$i</span>";
                }
            }elseif($num1>$num2){
                for($i = $num1; $i>=$num2; $i--){
                    echo"<span style='margin-right:10px';>$i</span>";
                }
            }else{
                    echo"<span>$num1</span>";
            }
            } 
    ?>
    </div>
</body>
</html>