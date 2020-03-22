<?php
    for($i = 0; $i < 10; $i++){
        $numeros[$i] = $_POST['valor'.($i + 1)]; // Vai pegando os valores com id valorx onde 'x' varia entre 1 e 10
    }

    $soma = 0;
    for($i = 0; $i < 10; $i++){
        $soma = $numeros[$i] + $soma;
    }

    $mult = $numeros[0] * $numeros[9];

    if($soma > $mult){
        $maior = $soma;
    }else{
        $maior = $mult;
    }
?>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
        <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
        <script>
            function voltar(){
                document.location.href = "index3.html"
            }
        </script>
    </head>

    <body>
        <br><br>
        <div class="container" align="center">
            <form id="form1" method="POST">
                <table width="290" weight="143" border="1" cellpandding="2" cellspacing="0">
                    <h2>Resultado</h2>
                    <tr>
                        <td width="85">Vetor: </td>
                        <td width="199"><?php for($i = 0; $i < 10; $i++){ { echo ("[ " . $numeros[$i] . " ]");if($i < 9){ echo (", "); } } }; ?></td>
                    </tr>
                    <tr>
                        <td width="85">Soma do vetor:</td>
                        <td width="199"><?php echo ($soma); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Valor 1 X Valor 10:</td>
                        <td width="199"><?php echo ($mult); ?></td>
                    </tr>
                    <tr>
                        <td width="85">Maior:</td>
                        <td width="199"><?php echo ($maior); ?></td>
                    </tr>
                </table>
                <input type="button" value="Voltar" onclick="voltar()">
            </form>
        </div>
    </body>
</html>