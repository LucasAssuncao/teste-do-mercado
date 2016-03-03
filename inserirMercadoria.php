<!DOCTYPE html>

<html>
    <head>
        <title>TESTE DO MERCADO</title>
        <?php include 'head.html'; ?>
    </head>

    <body>

        <?php include 'navbar.html'; ?>

        <div class="container-fluid">
            <div class="row-fluid">
                <?php include 'sidebar.html'; ?>
                <div class="span9">
                    <!-- Aqui deve ficar o conteúdo do Container -->

                    <table>
                        <form name="InserirMercadoria" action="validaInserirMercadoria.php" method="POST" onkeypress='return SomenteNumero(event)'>
                            <tr>
                                <td>Tipo da Mercadoria</td>
                                <td><input type="text" name="tipo" value="" placeholder="Alimento" required></td>
                            </tr>

                            <tr>
                                <td>Nome da Mercadoria</td>
                                <td><input type="text" name="nome" value="" placeholder="Arroz" required></td>
                            </tr>

                            <tr>
                                <td>Quantidade</td>
                                <td><input type="number" name="quantidade" value="" placeholder="3" required></td>
                            </tr>

                            <tr>
                                <td>Preço</td>
                                <td><input type="number" name="preco" value="" placeholder="5" required></td>
                            </tr>

                            <tr>
                                <td>Tipo de Negocio</td>
                                <td><input type="radio" name="tipoNegocio" value="COMPRA"> COMPRA
                                <br>
                                <input type="radio" name="tipoNegocio" value="VENDA"> VENDA </td>
                            </tr>

                            <tr>
                                <td colspan="2"><input type="submit" name="Enviar" value="Enviar"></td>
                            </tr>

                        </form>
                    </table>
                </div><!--/span-->
            </div><!--/row-->
        </div>
    </body>
</html>

