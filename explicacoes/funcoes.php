<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Funções</h1>

<?php 

// Criar função
function soma($a, $b) {
    $result = $a + $b;
    return $result;
}

// Invocar função
echo soma(3, 4);

?>

<br>

<?php 
// Invocar função através de outro bloco php
echo soma(20, 50); ?>

</body>
</html>