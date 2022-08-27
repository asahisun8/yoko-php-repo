<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Days of the Week Activity</title>

</head>
<body>
    <form action="" method="post">
        <!-- option1 -->
        <!-- <button type="submit" name="monday">Monday</button>
        <button type="submit" name="tuesday">tuesday</button>
        <button type="submit" name="wednesday">Wednesday</button>
        <button type="submit" name="thursday">Thursday</button>
        <button type="submit" name="friday">Friday</button>-->

        <!-- option2-->
        <input type="submit" value="Monday" name="day">
        <input type="submit" value="Tuesday" name="day">
        <input type="submit" value="Wednesday" name="day">
        <input type="submit" value="Thursday" name="day">
        <input type="submit" value="Friday" name="day">
        </form>
    </body>
</html>
<?php
// Option 1
// if (isset($_POST['monday'])) {   // if monday button is clicked
//    echo "Monday";                // display Monday
// }
// if (isset($_POST['tuesday'])) {
//    echo "Tuesday";
// }
// if (isset($_POST['wednesday'])) {
//    echo "Wednesday";
// }
// if (isset($_POST['thursday'])) {
//    echo "Thursday";
// }
// if (isset($_POST['friday'])) {
//    echo "Friday";
// }

// Option 2
if (isset($_POST['day'])) {
   echo $_POST['day'];     // display the value of button
}
?>
