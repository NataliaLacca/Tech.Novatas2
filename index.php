<?php

// Importa a configuração do site:
require('includes/config.php');

/***************************************************
 * Todos os códigos PHP desta página INICIAM aqui! *
 ***************************************************/

// SQL que obtém todos os artigos:
$sql = <<<SQL

-- Obtém somente os campos necessários:
SELECT aid, title, thumbnail, resume
FROM articles

-- Somente artigos 'online':
WHERE astatus = 'online'
    
    -- E somente artigos com data no passado:
    AND adate <= NOW()

-- Ordenado pela data de publicação mais recente:
ORDER BY adate DESC;

SQL;

// Executar o SQL e armazenar os resultados em '$res':
$res = $conn->query($sql);

// Se não encontrou artigos...
if ($res->num_rows == 0) :

    // Exibe mensagem para o usuário e encerra o aplicativo:
    $page_content .= '<p>Oooops! Nenhum artigo encontrado...</p>';

// Se encontrou artigos...
else :

    // Loop para obter cada artigo:
    while ($art = $res->fetch_assoc()) :

       // Formata a lista dos artigos:
       $page_content .= <<<HTML

<div>
    <img src="{$art['thumbnail']}" alt="{$art['title']}">
    <h3><a href="/view.php?{$art['aid']}">{$art['title']}</a></h3>
    {$art['resume']}
</div>
<p>------------------------</p>

HTML;

    endwhile;

endif;

// Define o título do documento:
$page_title = 'Artigos recentes';

/****************************************************
 * Todos os códigos PHP desta página TERMINAM aqui! *
 ****************************************************/

// Cabeçalho da página HTML:
require('header.php');

/******************************************************
 * Todo código HTML visível desta página COMEÇA aqui! *
 ******************************************************/
?>

<h2><?php echo $page_title ?></h2>
<?php echo $page_content ?>

<?php
/*******************************************************
 * Todo código HTML visível desta página TERMINA aqui! *
 *******************************************************/

// Rodapé da página HTML:
require('footer.php');
?>