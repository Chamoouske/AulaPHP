<?php
    $nome       = $_POST['nome'];
    $horasT     = $_POST['horasT'];
    $valorH     = $_POST['valorH'];
    $numFilhos  = $_POST['filhos'];

    $salarioBruto   = $horasT * $valorH;
    $acrescimoFilho = $salarioBruto * (0.1 * $numFilhos);
    $salarioBruto   = $acrescimoFilho + $salarioBruto;

    $impostoRenda   = 0.2 * $salarioBruto;
    $salarioBruto   -= $impostoRenda;
    $inss           = 0.08 * $salarioBruto;

    $salarioLqd     = $salarioBruto - $inss;
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
                    <td width="85">Salário bruto:</td>
                    <td width="199"><?php echo ("R$ " . number_format($salarioBruto, 2, ",", ".")) ?></td>
                </tr>
                <tr>
                    <td width="85">Acréscimo por filho:</td>
                    <td width="199"><?php echo ("R$ " . number_format($acrescimoFilho, 2, ",", ".")) ?></td>
                </tr>
                <tr>
                    <td width="85">Imposto de renda:</td>
                    <td width="199"><?php echo ("R$ " . number_format($impostoRenda, 2, ",", ".")) ?></td>
                </tr>
                <tr>
                    <td width="85">INSS:</td>
                    <td width="199"><?php echo ("R$ " . number_format($inss, 2, ",", ".")) ?></td>
                </tr>
                <tr>
                    <td width="85">Salário líquido:</td>
                    <td width="199"><?php echo ("R$ " . number_format($salarioLqd, 2, ",", ".")) ?></td>
                </tr>
            </table><br>
            <input type="button" value="Voltar" onclick="voltar()">
        </form>
    </body>
</html>