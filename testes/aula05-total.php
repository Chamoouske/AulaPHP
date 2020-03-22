<?php
    $produto = $_POST['txtproduto'];
    $qtd     = $_POST['txtqtd'];
    $valor   = str_replace(',', '.', $_POST['txtvalor']); // Troca , por . da variável txtvalor

    $total   = number_format($valor * $qtd, 2, ',', '.');// formata o resultado para 2 casas decimais e troca . pra ,
    
    $valor   = number_format($valor, 2, ',', '.'); // formata o resultado para 2 casas decimais e troca . pra ,
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>

    <body>
        <form id="form1" method="POST" action="aula05-vendas.html">
            <h2>Vendas de Produtos</h2>
            <table width="290" weight="143" border="1" cellpandding="2" cellspacing="0">
                <tr>
                    <td width="85">Produto:</td>
                    <td width="199"><?php echo $produto ?></td>
                </tr>
                <tr>
                    <td width="85">Quantidade:</td>
                    <td width="199"><?php echo $qtd ?></td>
                </tr>
                <tr>
                    <td width="85">Valor:</td>
                    <td width="199">R$ <?php echo $valor ?></td>
                </tr>
                <tr>
                    <td width="85">Total: </td>
                    <td width="199">R$ <?php echo $total ?></td>
                </tr>
            </table>
        </form>
        <br><a href="aula05-vendas.html">Voltar</a>
    </body>
</html>