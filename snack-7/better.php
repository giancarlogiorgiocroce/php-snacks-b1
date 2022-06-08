<?php
/*
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$classe = [
    [
        'nome' => 'Ciccio',
        'cognome' => 'Pasticcio',
        'voti' => [5, 6, 7, 5, 5, 2],
    ],
    [
        'nome' => 'Braccobaldo',
        'cognome' => 'Bau',
        'voti' => [5, 6, 8, 8, 10, 9],
    ],
    [
        'nome' => 'Tonino',
        'cognome' => 'Latorre',
        'voti' => [1, 7, 8, 5, 5, 2],
    ],
];

// var_dump($classe);
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
    <h1></h1>
    <ul>
        <?php foreach($classe as $studente): ?>
            <li>
                <?php echo $studente['nome'] ?> 
                <?php echo $studente['cognome'] ?> 
                -> 
                <?php echo round(array_sum($studente['voti'])/count($studente['voti'])) ?> 
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>