<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Estruturas condicionais</h1>
    

    <?php
    // Um jeito de escrever condicional

    $teste = 'Joca';

    if ($teste == 'Maria') {
        // Se a exp acima for true
        echo 'Usuário correto!';
        echo 'Bem-vindo!';
    } elseif ($teste == 'Joca') {
        // Se a primeira exp for false e a segunda for true
        echo 'Olá Joca!';
        echo 'Como vai?';
    } else {
        // Se todas as exp forem falsas
        echo 'Usuário incorreto!';
        echo 'Tente novamente!';
    }

    ?>

    <hr>

    <?php
    // Outro jeito de escrever condicional -> melhor maneira

    $teste = 'Ana';

    if ($teste == 'Maria') :
        // Se a exp acima for true
        echo 'Ola           ' . $teste;
        echo 'Bem-vinda!';
    elseif ($teste == 'Joca') :
        // Se a primeira exp for false e a segunda for true
        echo 'Ola ' . $teste;
        echo 'Como vai!';
    elseif ($teste == 'Ana') :
        // Se a primeira exp e a segunda for false
        echo 'Ola ' . $teste;
        echo 'Tudo ok?';
    else :
        // Se todas as exp forem falsas
        echo 'Usuário incorreto!';
        echo 'Tente novamente!';
    endif;

    ?>

    <hr>
    
    <?php
    // Escrevendo switch condicional -> a maneira mais simples/básica de comparação

    $teste = 'Maria';

    switch($teste) :
        case 'Maria':
            echo 'Ola ' . $teste;
            echo 'Bem-vinda!';
            break; // Serve para parar o teste caso acima seja true
        case 'Joca':
            echo 'Ola ' . $teste;
            echo 'Como vai!';
            break; // Serve para parar o teste caso acima seja true
        case 'Ana':
            echo 'Ola ' . $teste;
            echo 'Tudo ok?';
            break; // Serve para parar o teste caso acima seja true
        default: // Caso nenhuma das alternativas anteriores seja true
            echo 'Usuário incorreto!';
            echo 'Tente novamente!';
    endswitch
    ?>

</body>

</html>