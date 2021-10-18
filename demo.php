<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello!
   <?php 
   $statement = "Hello, my name is Kevin"; //dont put space cause this is supposed to be an input
   $lastname = "Chew";
   echo $statement." ".$lastname."<br>"; //put ." " to add a space in the echo, in php we use . to concatenate

   //check string length
   echo strlen($statement.$lastname)."<br>";
   
    //using operators
    $first = 3;
    $second = 7;

    $total = $first + $second;  //always assign your variables to another variables so that it can be reused
    echo $total;

    $total_add = $first+$second;
    $total_minus = $first-$second;
    $total_mul = $first*$second;
    $total_div = $first/$second;
    
    

   ?>
</body>
</html>