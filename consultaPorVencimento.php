<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');
        
        $datavencimento = $_POST['dataVencimento'];

        $consulta = mysqli_query($conexao, "SELECT * FROM notas_fiscais WHERE Data_vencimento = '$datavencimento'");

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
            <h1>Consultar Nota por Data de Vencimento</h1>
            <form action="consultaPorVencimento.php" method="post">

                <fieldset>
                    <label for="vencimento">Data de Vencimento</label>: <br>
                    <input type="date" name="dataVencimento" id="dataVencimento"> <br>

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
                    <a>Não há nenhuma nota cadastrada no Sistema com essa data de vencimento.</a>
                <?php } ?>
            <?php } ?>
        
        </main>

        <footer>

        </footer>

    </body>

</html>
