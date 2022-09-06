<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in Php</title>
</head>
<body>

<?php
  echo "Welcome to php tutorial on functions <br>";

//   Functions receiving no argument
//   function functionName() {
//     code to be executed;
//   }




// Function receiving argument

// function functionName(argument(s)) {
//   code to be executed;
// }



// function sumNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, 20);



// function add_some_extra($string)
// {
//     $string .= 'Add something.';
// }

// $str = 'I have added this';
// add_some_extra($str);

// echo $str;   
// outputs ‘Add something. I have added this'




    function processMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function avgMarks($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

    $Pritam = [34, 98, 45, 12, 98, 93];
    // $sumMarks = processMarks($Pritam);
    $sumMarks = avgMarks($Pritam);

    $Biplab = [99, 98, 93, 94, 17, 100];
    // $sumMarksBiplab = processMarks($Biplab);
    $sumMarksBiplab = avgMarks( $Biplab);
    echo "Total marks scored by Pritam out of 600 is $sumMarks <br>";
    echo "Total marks scored by Biplab out of 600 is $sumMarksBiplab";

?>

    
</body>
</html>
