<?php 

/* só posso escrever
código antes do
doctype, sem gerar
uma echo (manda 
informação pro navegador) */

// Variáveis no php -> $
// $corDaCasa; -> came/case
/* espaço dentro de 
uma variável:
$cor_da_casa */
$cor_da_casa = 'purple'
$Cor_da_casa = 'lilaz'
$casa_vendida = false;

// Constante -> sem $
define('numero_da_casa', 25);

// Outra variável
$corDaCasa = 'azul'

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech.Novatas2</title>
</head>
<body>

<h1>Olá mundo!</h1>

<?php // comentários de 1 linha ?>
<?php echo 'olá mundo do php!' ?>

<?php 

/* para fazer comentários 
de várias linhas, 
mas deve estar dentro do 
código PHP*/
echo 'olá terra';
ECHO "olá marte";
EcHo 'olá lua'; // exibe uma string
echo 22.3; // exibe um número
echo false; // exibe um booleano
echo null; // exibe um nulo
?>

<hr>

<?php

echo $cor_da_casa;
echo numero_da_casa;

if ($casa_vendida) {
    echo 'A casa foi vendida';
} else {
    echo 'Casa disponível'; 
}

if (false) {
    // se acima for true
    echo 'A casa foi vendida';
} elseif (true) {
    // se a primeira é false e a segunda for true
    echo 'Casa disponível'; 
} else {
    // se ambas forem false
    echo 'Não sei ainda'; 
}


// Concatenação -> com ponto final para juntar strings
echo '<p>' . $cor_da_casa . '<p>';
echo '<p style="color: ' . $cor_da_casa . '">' . $cor_da_casa . '</p>';
// <p style="color: purple">purple</p> 

// Interpolar -> sempre usar aspas duplas
echo "<h2>{'$cor_da_casa'}</h2>"; 

// Heredoc
'a cor é "azul"!';
"a cor é 'azul'!";
`a "cor" é 'azul'!`;

// Escape -> "\"
echo "<p style=\"color:red\">{$cor_da_casa}</p>";

// Heredoc
echo <<<HTML
<p style="color:red">{$cor_da_casa}</p>;
HTML

// Define uma função
function soma($val1, $val2) {
    $resultado = $val1 + $val2;
    return $resultado;
}

// Invocar função
echo soma(10, 5);

?>
    
</body>
</html>