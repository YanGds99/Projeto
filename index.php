<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');
        
        $numero = $_POST['numero'];
        $natureza = $_POST['natureza'];
        $empresa = $_POST['empresa'];
        $uf = $_POST['uf'];
        $dataemissao = $_POST['dataemissao'];
        $datavencimento = $_POST['datavencimento'];

        $result = mysqli_query($conexao, "INSERT INTO notas_fiscais(Numero,Natureza,Empresa,Uf,Data_emissao,Data_vencimento)
        VALUES ('$numero','$natureza','$empresa','$uf','$dataemissao','$datavencimento')");
    }

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="imagens/nfe.png">

    </head>

    <body>
        <h1>Cadastrar Notas Fiscais</h1>

        <form action="index.php" method="post">

        <fieldset>
            <legend> Cadastro da Nota Fiscal </legend>

            <label for="numero">Número</label>: <br>
            <input type="number" name="numero" id="numero"> <br>

            <label for="natureza">Natureza</label>: <br>
            <input type="text" name="natureza" id="natureza"> <br>

            <label for="empresa">Empresa</label>: <br>
            <input type="text" name="empresa" id="empresa"> <br>

            <label for="uf">Cidade/Estado</label>: <br>
            <input type="uf" name="uf" id="uf"> <br>

            <label for="dataemissao">Data de Emissão</label>: <br>
            <input type="date" name="dataemissao" id="dataemissao"> <br>

            <label for="datavencimento">Data de Vencimento</label>: <br>
            <input type="date" name="datavencimento" id="datavencimento"> <br>

            <br><button type="reset">Limpar</button>
            <input type="submit" name="submit" id="submit">

        </fieldset>

        </form>

    </body>

</html>
