<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else Greater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="card text-dark text-center bg-light mx-auto mt-3" style="max-width: 15rem;">
    <div class="card-header bg-dark text-white"><h6>if else greater.</h6></div>
    <div class="card-body mx-auto">
        <form action="" method="get">
            <div class="row m-auto my-1">
                <div class="col"><input type="number" class="form-control" name="num1" id="" placeholder="First Number"></div>
            </div>
           </div>
            <div class="row m-auto my-1">
                <div class="col"><input type="number" class="form-control" name="num2" id="" placeholder="Second Number"></div>
             </div>
            <input type="submit" name="btnSubmit" value="Go"></input>
       </form> 

</body>
  
</html>
<?php
 function getNum($inputname){
     return $_GET[$inputname];
 }
 
if(isset($_GET['btnSubmit'])) {
        $num1 = getNum('num1');
        $num2 = getNum('num2');
        
    if($num1>$num2) {
    echo "<p class='display-1'> $num1 > $num2 </p>";

    } elseif($num1==$num2) {
    echo "<p class='display-1'> $num1 = $num2 </p>";
 
    } else {
    echo "<p class='display-1'> $num2 > $num1 </p>";

}
}

?>