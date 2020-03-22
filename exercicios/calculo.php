<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];

    $media = number_format(($valor1 + $valor2 + $valor3) / 3, 2, ",", ".");

    // DEFININDO O MENOR
    if($valor1 < $valor2){
        if($valor1 < $valor3){
            $menor = $valor1;
        }else{
            $menor = $valor3;
        }
    }else if($valor2 < $valor3){
        $menor = $valor2;
    }else{
        $menor = $valor3;
    }

    // DEFININDO O MAIOR
    if($valor1 > $valor2){
        if($valor1 > $valor3){
            $maior = $valor1;
        }else{
            $maior = $valor3;
        }
    }else if($valor2 > $valor3){
        $maior = $valor2;
    }else{
        $maior = $valor3;
    }
?>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
        <script>
            function voltar(){
                document.location.href = "index.html"
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
                        <td width="85">Valores:</td>
                        <td width="199"><?php echo ($valor1 . ", " . $valor2 . ", " . $valor3) ?></td>
                    </tr>
                    <tr>
                        <td width="85">Max/Min:</td>
                        <td width="199"><?php echo ($maior . ", " . $menor) ?></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td width="85">Média:</td>
                        <td width="199"><?php echo $media ?></td>
                    </tr>
                </table>
                <input type="button" value="Voltar" onclick="voltar()">
            </form>
        </div>
    </body>
</html>