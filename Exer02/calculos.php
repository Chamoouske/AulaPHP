<?php
    $sexos = array($_POST['sexo1'], $_POST['sexo2'], $_POST['sexo3'], $_POST['sexo4'], $_POST['sexo5']);
    $alturas = array($_POST['altura1'], $_POST['altura2'], $_POST['altura3'], $_POST['altura4'], $_POST['altura5']);

    $femi = 0;
    $masc = 0;
    for($i = 0; $i < 5; $i++){
        $sexos[$i] = strtolower($sexos[$i]);
        if($sexos[$i] == "f"){
            $femi = $femi + 1;
        }else{
            $masc = $masc + 1;
        }
    }

    $iSex = 0;
    $maior = $alturas[0];
    for($i = 1; $i < 5; $i++){
        if($alturas[$i] > $alturas[$i - 1]){
            $maior = $alturas[$i];
            $iSex = $i;
        }
    }
    $maior = number_format($maior, 2, ",", ".");
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>

    <body>
        <form id="form1" method="POST" action="dados.html" align="center">
            <table width="290" weight="143" border="2" cellpandding="2" cellspacing="0" align="center">
                <h2>Inserir Dados</h2>
                <tr>
                    <td width="85">Masculinos:</td>
                    <td width="199"><?php echo $masc; ?></td>
                </tr>
                <tr>
                <td width="85">Femininos:</td>
                    <td width="199"><?php echo $femi; ?></td>
                </tr>
                <tr>
                    <td width="85">Maior Altura:</td>
                    <td width="199"><?php echo ($maior . "m<br>Sexo: " . strtoupper($sexos[$iSex])); ?></td>
                </tr>
            </table>
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>