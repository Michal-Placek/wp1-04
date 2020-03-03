<?php
 $age=19;
if ($age >=18) {
    $answer="Děkujeme, přijďte zas.";
    $imgURL="https://pngimage.net/wp-content/uploads/2018/05/alkohol-png-4.png";
} else {
    $answer="Smůla, alkohol a tabák se zde prodává od 18 let.";

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=$answer ?>
</body>
</html>