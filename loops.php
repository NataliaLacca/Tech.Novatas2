<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Laços de repetição</h1>

<?php
// Enquanto a var for tru, execute -> while

$num1 = 0;

    while($num1 < 10) {

        echo $num1 . '<br>';
        $num1 = $num1 + 1; /* Add 1 faz com que uma hora o loop
        seja encerrado pq quando a soma for 9 + 1, vai resultar 10                 
        e a expressão pede que o resultado seja menor que 10 */

    }
?>

<?php
// Criar tabuada

$num1 = 1;
    // Forma mais indicada 
    while ($num1 <= 10) :
        $num2 = 0;
        while ($num2 <= 10) {
            $res = $num1 * $num2;
            echo "{$num1} x {$num2} = {$res}<br>";
            $num2++; // $num2 = $num2 + 1;
        }
        $num1++;
        echo '<hr>';
    endwhile;
?>

<hr>
<hr>

<?php
    // Outra forma de criar tabuada
    for ($x = -10; $x <= 10; $x++) :
        echo "{$x}<br>";
    endfor;
?>

</body>

</html>