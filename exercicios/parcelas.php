<?php
    $valor1 = $_POST['valor1'];
    $parcelas = $_POST['parcelas'];

    $valorParcela = number_format(($valor1 / $parcelas), 2, ",", ".");
?>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
        <script>
            function voltar(){
                document.location.href = "index2.html"
            }
        </script>
    </head>

    <body>
        <br><br>
        <div class="container" align="center">
            <form id="form1" method="POST">
                <h2>Resultados</h2>
                <table width="290" weight="143" border="1" cellpandding="2" cellspacing="0">
                    <tr>
                        <td width="85">Valor da venda:</td>
                        <td width="199" align="center"><?php echo ("R$ " . $valor1) ?></td>
                    </tr>
                    <tr>
                        <td width="85">Número de parcelas:</td>
                        <td width="199" align="center"><?php echo ($parcelas) ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td width="85">Valor por parcela:</td>
                        <td width="199" align="center"><?php echo ("R$ " . $valorParcela) ?></td>
                    </tr>
                </table>
                <input type="button" value="Voltar" onclick="voltar()">
            </form>
        </div>
    </body>
</html>