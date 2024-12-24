<?php

    if(isset($_GET['math'])){ 
       // trying to see if the number isnt null (no value entered) 
       //

        $x = $_GET['number1'];
        $y = $_GET['number2'];
        $op = $_GET['math'];

        if(is_numeric($x) && is_numeric($y)){

            switch($op){

                case 'addition' : $result = $x + $y;
                break; 
            
                case 'subtraction' : $result = $x - $y;
                break; 
                
                case 'multiplication' : $result = $x * $y;
                break; 
          
                case 'division' : $result = $x / $y;
                break; 
                 }
     }
            else{
                $error = "Can only do math for real numbers :/"; }    
 }

 echo (float) $result; 

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>M2 - Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP']?>" method="get"></form>

   <!--First number -->
<div>
    <label for="number1">First</label>
    <input type="number" name="number1" id="number1" value="<?$y ?>">
</div>

   <!--Second number -->
<div>
    <label for="number2">Second</label>
    <input type="number" name="number2" id="number2" value="<?$y ?>">
</div>

<!--Math--> 
<div>
   <input type="submit" value="addition" name="math">
   <input type="submit" value="subtraction" name="math">
   <input type="submit" value="multiplication" name="math">
   <input type="submit" value="division" name="math">
</div> 

<!-- Answer --> 
<div>
    <label for="answer">Answer</label>
    <input type="number" id="answer" value ="<?=$result?>" disabled>
</div>

</body>
</html>
 