<?php
    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $nome3 = $_POST['nome3'];
    $nome4 = $_POST['nome4'];
    $nome5 = $_POST['nome5'];

    $nome1 = strrev($nome1);
    $nome2 = strrev($nome2);
    $nome3 = strrev($nome3);
    $nome4 = strrev($nome4);
    $nome5 = strrev($nome5);
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>

    <body>
        <form id="form1" method="POST" action="nomes.html" align="center">
            <h2>Resultado</h2>
            <h4>
                <table width="290" weight="143" border="0" cellpandding="2" cellspacing="0" align="center">
                    <tr>
                        <td width="85">Nome 1:</td>
                        <td width="199"><?php echo ($nome1); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Nome 2:</td>
                        <td width="199"><?php echo ($nome2); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Nome 3:</td>
                        <td width="199"><?php echo ($nome3); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Nome 4:</td>
                        <td width="199"><?php echo ($nome4); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Nome 5:</td>
                        <td width="199"><?php echo ($nome5); ?></td>
                    </tr>
                </table>
            </h4>
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>