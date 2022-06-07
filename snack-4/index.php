<?php
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

function drawNumbers($min, $max, $nItems){
    $numbersArray = [];
    while(count($numbersArray) < $nItems){
        $randomNumber = rand($min, $max);
        if(!in_array($randomNumber, $numbersArray)){
            array_push($numbersArray, $randomNumber);
        };
    }
    return $numbersArray;
}

$randomArray = drawNumbers(1, 15, 15);
var_dump($randomArray);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Snack 4</h1>
</body>
</html>