<?php
$contacts=[
 ["id"=>"1","name" => "Yoko Fujita", "address" => "Japan"],
 ["id"=>"2","name" => "John Doe", "address" => "USA"],
 ["id"=>"3","name" => "Marc Albaran", "address" => "Philippines"],
 ["id"=>"4","name" => "Yoko Fujita", "address" => "England"],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="card mx-auto mt-3 mb-3" style="max-width: 25rem;" >
            <div class="card-header bg-success text-white">
                <h1 class="card-title">Welcome to the Green Pages</h1>
            </div>
                <div class=card-body>
                    <form action="#" method="post">
                        <select name="contact" id="contacts" class="form-select mb-3">
                            <option selected disabled>Select a contact</option>
                            <?php
                            foreach($contacts as $arr){
                            ?>
                            <option value="<?=$arr["id"]?>"><?=$arr["name"]?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <!-- <input type="submit" class="btn btn-success w-100 my-3" name="btn_submit" value="submit"> -->
                       <button type="submit" class="btn btn-success w-100 my-3" name="btn_submit">Submit</button>
                    </form>
<?php
    if(isset($_POST['btn_submit']) && isset($_POST['contact'])){
      $contact = $_POST['contact'];
     $contact_details=[];
     
    // $address = ["Mark" => "New York", "Chris" => "London", "Marie" => "Paris", "Kenzo" => "Istanbul", "Troye" => "Perth"];

     foreach($contacts as $arr){   
        if($contact == $arr["id"]){
            $contact_details=$arr;
        }
    }
    if(count($contact_details)!=0){
?>
  <div class="mx-auto mt-5 w-25 text-center">
        <h1><?=$contact_details["name"]?>lives in <?=$contact_details["address"]?></h1>
  </div>  
<?php
    }
}

?>        
</body>
</html>