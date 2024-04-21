<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');
        
        $numero = $_POST['numero'];
        $natureza = $_POST['natureza'];
        $valor = $_POST['valor'];
        $empresa = $_POST['empresa'];
        $uf = $_POST['uf'];
        $dataemissao = $_POST['dataemissao'];
        $datavencimento = $_POST['datavencimento'];

        $result = mysqli_query($conexao, "INSERT INTO notas_fiscais(Numero,Natureza,Valor,Empresa_Cliente,Uf_emissao,Data_emissao,Data_vencimento)
        VALUES ('$numero','$natureza','$valor','$empresa','$uf','$dataemissao','$datavencimento')");
    }

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Cadastro de Notas</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="imagens/nfe.png">
        <link rel="stylesheet" tipe="text/css" href="estilos.css">
    </head>

    <body>
        <header id="cadastro">
            <img id=“img-logo” src="imagens/nfe.png">
            <a id="link" href="index.php">Página Incial</a>
        </header>

        <main>
            <h1>Cadastro da Nota Fiscal</h1>
            <form action="cadastro.php" method="post">
                <fieldset>
                    
                    <label for="numero">Número</label>: <br>
                    <input type="number" name="numero" id="numero"> <br>

                    <label for="natureza">Natureza</label>: <br>
                    <input type="text" name="natureza" id="natureza"> <br>

                    <label for="valor">Valor</label>: <br>
                    <input type="number" name="valor" id="valor"> <br>

                    <label for="empresa">Empresa/Cliente</label>: <br>
                    <input type="text" name="empresa" id="empresa"> <br>

                    <label for="uf">Cidade/Estado</label>: <br>
                    <input type="uf" name="uf" id="uf"> <br>

                    <label for="dataemissao">Data de Emissão</label>: <br>
                    <input type="date" name="dataemissao" id="dataemissao"> <br>

                    <label for="datavencimento">Data de Vencimento</label>: <br>
                    <input type="date" name="datavencimento" id="datavencimento" class="data"> <br>

                    <br><button type="reset">Limpar</button>
                    <input type="submit" name="submit" id="submit">

                </fieldset>
            </form>
        </main>
        <footer>

        </footer>

    </body>

</html>
