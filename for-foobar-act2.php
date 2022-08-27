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
<div class="card mx-auto mb-3 mt-3 py-3" style="max-width: 15rem;">
    <div class="card-header"><h5>Foo Bar</h5></div>
    <div class="card-body">
        <form action="" method="post">
            <label for="num1" class="form-label">The starting number</label>
            <input type="number" class="form-control mb-3" name="num1">
            
            <label for="num2" class="form-label">The ending number</label>
            <input type="number" class="form-control mb-3" name="num2">
            <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>
        </form>
    </div>
    <div class="card-footer"  style="max-width: 15rem;">
    <?php
        if(isset($_POST['btn_submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            for(; $num1 < $num2; $num1++){
                if($num1 % 3 == 0 && $num1 % 5 ==0){
                    echo"<span style='margin-right: 10px;'>FOO BAR</span>";
                }elseif($num1 % 3 == 0){
                    echo"<span style='margin-right: 10px;'>FOO</span>";
                }elseif($num1 % 5 ==0){
                    echo"<span style='margin-right: 10px;'>BAR</span>";   
                }else{
                    echo"<span style='margin-right: 10px;'>$num1</span>";   
                }
            }
        }
    ?>
    </div> 
</div>
</body>
</html>