<?php
    // Definição de variáveis
    $nome = "Curso de TADS";
    $localizacao = "Castanhal";
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
    <table width="290" weight="143" border="1" cellpandding="2" cellspacing="0">
        <tr>
            <th colspan="2" scope="col"><h2>Curso: <?php echo $nome ?></h2></th>
        </tr>
        <tr>
            <td width="85">Localização</td>
            <td width="199"><?php echo $localizacao ?></td>
        </tr>
        <tr>
            <td width="85">Página web</td>
            <td width="199"><?php echo $web ?></td>
        </tr>
        <tr>
            <td width="85">Descrição</td>
            <td width="199"><?php echo $descricao ?></td>
        </tr>
    </table>
    </body>
</html>