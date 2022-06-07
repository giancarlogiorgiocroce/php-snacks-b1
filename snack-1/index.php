<?php
/*
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$array = [
    [
        'host' => 'Celtics',
        'guest' => 'Heat',
        'hostpoits' => 103,
        'guestpoits' => 111,
    ],
    [
        'host' => 'Warriors',
        'guest' => 'Mavericks',
        'hostpoits' => 120,
        'guestpoits' => 110,
    ],
    [
        'host' => 'Sixers',
        'guest' => 'Grizzlies',
        'hostpoits' => 142,
        'guestpoits' => 112,
    ],
];

// var_dump($array);
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
    <h3>Ultime partite giocate:</h3>
    <ul>
        <?php 
            for($i = 0; $i < count($array); $i++){
                echo '<li>' . $array[$i]['host'] . ' - ' . $array[$i]['guest'] . ' | ' . $array[$i]['hostpoits'] . ' - ' . $array[$i]['guestpoits'] . '</li>';
            }
        ?>
    </ul>
</body>
</html>