<?php
/*
## Snack 2
Passare come parametri GET name, mail e age 
e verificare che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”


    <h1><?php if(!$isPermitted){ echo "<h2>Accesso negato</h2>"} ?></h1>

*/

// var_dump($_GET);

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

    <h1>Controllo in corso...</h1>
    <h2>
        <?php
            if(strlen($_GET['name']) > 3 && strpos($_GET['email'], '@') && strpos($_GET['email'], '.') && is_numeric($_GET['age'])){
                echo 'Accesso consentito';
            }else{
                echo 'Accesso negato';
            };
        ?>
    </h2>
  
</body>
</html>