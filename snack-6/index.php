<?php
/*
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde.
*/

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// var_dump($db);
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .teachers{
            height: 100px;
            width: 300px;
            background-color: grey;
        }
        .pm{
            height: 100px;
            width: 300px;
            background-color: green;
        }
    </style>

</head>

<body>
    <h1>Snack 6</h1>
    <?php foreach ($db as $role => $ppl): ?>
        <div class="<?php echo $role ?>">
            <ul>
                <?php foreach ($ppl as $key => $value): ?>
                    <li>
                        <?php echo $value['name'] ?>
                        <?php echo $value['lastname'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</body>

</html>