<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');
        
        $empresa = $_POST['empresa'];

        $consulta = mysqli_query($conexao, "SELECT * FROM notas_fiscais WHERE Empresa_Cliente = '$empresa'");

        $linha = mysqli_fetch_row($consulta);
    }

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Consulta de Notas</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="imagens/nfe.png">
        <link rel="stylesheet" tipe="text/css" href="estilos.css">
    </head>

    <body>
        <header id="consulta">
            <img id=“img-logo” src="imagens/nfe.png">
            <a id="link" href="index.php">Página Incial</a>
        </header>

        <main>
            <h1>Consultar Nota por Empresa/Cliente</h1>
            <form action="consultaPorEmpresa.php" method="post">

                <fieldset>
                    <label for="empresa">Empresa ou Cliente</label>: <br>
                    <input type="text" name="empresa" id="empresa"> <br>

                    <br><button type="reset">Limpar</button>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
                <br><br>

            </form>

            <?php if(isset($_POST['submit'])) { ?>
                <?php if(is_array($linha)){ ?>
                    <table>
                        <tr>
                            <td>Numero</td>
                            <td>Natureza</td>
                            <td>Valor</td>
                            <td>Empresa/Cliente</td>
                            <td>UF</td>
                            <td>Data de Emissão</td>
                            <td>Data de Vencimento</td>
                        </tr>
                        <tr>
                            <td><?php echo $linha[1]; ?></td>
                            <td><?php echo $linha[2]; ?></td>
                            <td><?php echo number_format($linha[3],2,",","."); ?></td>
                            <td><?php echo $linha[4]; ?></td>
                            <td><?php echo $linha[5]; ?></td>
                            <td><?php echo date("d/m/Y", strtotime($linha[6])); ?></td>
                            <td><?php echo date("d/m/Y", strtotime($linha[7])); ?></td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <a>Empresa ou Cliente não tem nenhuma nota cadastrada no sistema.</a>    
                <?php } ?>
            <?php } ?>
        
        </main>

        <footer>

        </footer>

    </body>

</html>
