<?php
    $nome       = $_POST['nome'];
    $horasT     = $_POST['horasT'];
    $valorH     = $_POST['valorH'];
    $numFilhos  = $_POST['filhos'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>TratorTec RH</title>
        <script>
            function voltar(){
                document.location.href = "index.html"
            }
        </script>
    </head>

    <body>
        <form id="form1" method="POST" action="" align="center">
            <table width="290" weight="143" border="2" cellpandding="2" cellspacing="0" align="center">
                <h2>Dados do funcionário</h2>
                <tr>
                    <td width="85">Nome do funcionário:</td>
                    <td width="199"><?php echo $nome ?></td>
                </tr>
                <tr>
                    <td width="85">Horas trabalhadas:</td>
                    <td width="199"><?php echo ($horasT) ?></td>
                </tr>
                <tr>
                    <td width="85">Valor da hora:</td>
                    <td width="199"><?php echo ("R$ " . number_format($valorH, 2, ",", ".")) ?></td>
                </tr>
                <tr>
                    <td width="85">Qtd de Filhos menores de 14 anos:</td>
                    <td width="199"><?php echo ($numFilhos) ?></td>
                </tr>
            </table><br>
            <input type="button" value="Voltar" onclick="voltar()">
        </form>
    </body>
</html>