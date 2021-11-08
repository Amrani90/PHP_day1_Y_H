<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>

<?= "<h1>Yousouf Amrani!</h1>" ?>




<?php 
$name = "Yousouf";
$surname = "AM";
$age = 30;
$jobtitle = "Developer";
echo '<i><h2>My name is</h2></i>' . $name . $surname . '<i><h2>and im</h2></i>' . $age . '<i><h2>years old and i work as a</h2></i>' . $jobtitle;?>

<br>
<br>
<br>
<?php

     

       $numbers = array(10, 20, 30, 40, 50);


       $numbers[0] = "Mark";
       $numbers[1] = "John";
       $numbers[2] = "Georg";
       $numbers[3] = "Lisa";

       
       echo "the first Player in the Team is: " . $numbers[0 ] . "<br/>";
       echo "the Second Player in the Team is: " . $numbers[1 ] . "<br/>";
       echo "the Third Player in the Team is: " . $numbers[2 ] . "<br/>";
       echo "the fourth Player in the Team is:" . $numbers[3 ] . "<br/>";
?>



</body>
</html>