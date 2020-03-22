<?php
    // Definição de variáveis
    $nome = "Curso de TADS";
    $localidade = "Castanhal";
    $web = "uepa.br/tads";
    $descricao = "Curso de Análise e Desenvolvimento de Sistemas";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>

    <body>
        <?php 
            echo "<h1>Curso: " . $nome . "<br>" . 
            "Localização: " . $localidade . "<br>" .
            "Página web: " . $web . "<br>" .
            "Descrição: " . $descricao . "</h1>"
        ?>
    </body>
</html>