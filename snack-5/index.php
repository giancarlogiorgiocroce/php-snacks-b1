<?php
/*
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
*/
$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iure, asperiores voluptas quos eius consequuntur voluptates officiis quam consectetur iste saepe totam incidunt ab deleniti illum architecto delectus, quod recusandae excepturi accusamus velit id. Error vitae voluptatibus quidem dolorem laboriosam nihil dolore alias, eius modi, numquam ea cumque soluta veniam in esse libero? Quasi ipsa numquam sit deserunt odit iure perspiciatis alias soluta est repellat illum, eius ducimus laudantium eveniet velit, asperiores quisquam provident nesciunt? Nobis, alias quam? Excepturi doloremque, repellendus numquam voluptatum quidem perspiciatis. Impedit voluptatum laborum labore sit, consequatur explicabo sequi excepturi qui nam eum ullam eaque. Dicta?';

$multiLorem = explode(".", $lorem);

var_dump($multiLorem);

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
    <h1>HW5</h1>
</body>
</html>