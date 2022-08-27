<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quiz Calculator</title>
</head>
<body>

<div class="container">
    <div class="card w-25 mx-auto mt-5">
        <div class="card-header">
            <h1 class="card-title">Quiz Calculator</h1>
        </div>
           <?php
             if(isset($_POST['btn_calculate'])){
                $scores = $_POST['score'];
                $array_size = count($scores);
                $sum = 0;

                for($i=0; $i < $array_size; $i++){
                    $sum += $scores[$i];
                }

                 $average = $sum / $array_size;
            ?>
                <div class="alert alert-success" role="alert">
                    The average score is <?=$average?>
                </div>
                    <?php
                     }
                    ?>
                    <form action="" method="post">
                            <label for="num-quizez" class="form-label" >Enter number of quizzez</label>
                            <input type="number" name="num_quizzes" id=num_quizzes min="1" class="form-control mb-3">
                            <input type="submit" name="btn_submit" value="Submit" class="btn btn-success">
                     
                    </form>
    </div>
</div>

<?php
if(isset($_POST['btn_submit'])){
    $num_quizzes = $_POST['num_quizzes'];
?>

<form action="" method="post">
    <p>Enter scores for each quiz<p>

    <?php
        for($i=1; $i <= $num_quizzes; $i++){
    ?>
    <label for="score" class="form-label">Quiz<?=$i?></label>
    <input type="number" name="score[]" id="score" class="form-control mb-3" min="0">
    <?php
    }
    ?>
  <input type="submit" name="btn_calculate" value="Calculate" class="btn btn-primary w-100">
</form>
<?php
}
?>
</body>
</html>