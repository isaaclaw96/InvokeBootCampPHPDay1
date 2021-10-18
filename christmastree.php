<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


		for ($i=1; $i<6; $i++ ) {  //to make the number of rows 
            // for ($k=1; $k<6-$i;$k++){
            //     echo '&nbsp;';
            // }
			for($j=0; $j<$i; $j++ ) {
				echo "*"." ";
			}
			
			echo "<br/>";
		}
        for($i=1; $i<6; $i++){
            for($j=0;$j<6-$i;$j++){
                echo "*"." ";
            }
            echo "<br/>";
        }

        $integer_sum = 0;
        for($x=0;$x<=30;$x++){
            $integer_sum += $x;
        }
        echo "<br>"."Loop to add all integers between 0 and 30 is $integer_sum"."<br>";

        $odd_num_sum = 0;
        $even_num_sum = 0;
        for($x=30;$x<=50;$x++){
            if ($x%2!==0){
                $odd_num_sum = $odd_num_sum + $x;
            
            }
            else {
                $even_num_sum = $even_num_sum + $x;
            }
        }
        echo "<br>"."Odd Numbers Sum is $odd_num_sum"."<br>";

        $greetings = "<br>"."Hello my name is Kevin"."<br>";
        echo str_replace(" ","%",$greetings,$i);
        echo "<br>"."Replacement done: $i";
	?>
</body>
</html>