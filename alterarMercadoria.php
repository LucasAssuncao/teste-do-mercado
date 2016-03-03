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

                    <?php
						include "connection.php";

						// Recebe o Código passado por parâmatro na URL
						$codigo = $_GET['codigo'];

						$sql = ("SELECT * FROM tbl_mercadoria WHERE cod_mercadoria = '".$codigo."'");
                        $consulta = mysqli_query($conn,$sql);


                 

                    ?>

                    <table>
                        <form name="InserirMercadoria" action="validaAlterarMercadoria.php" method="POST">


                            <tr>
                                <td>Tipo da Mercadoria</td>
                                <td><input type="text" name="tipo" value="" placeholder="" required></td>
                            </tr>

                            <tr>
                                <td>Nome da Mercadoria</td>
                                <td><input type="text" name="nome" value="" placeholder="" required></td>
                            </tr>

                            <tr>
                                <td>Quantidade</td>
                                <td><input type="number" name="quantidade" value="" placeholder="" required></td>
                            </tr>

                            <tr>
                                <td>Preço</td>
                                <td><input type="number" name="preco" value="" placeholder="" required></td>
                            </tr>

                            <tr>
                                <td>Tipo de Negocio</td>
                                <td><input type="radio" name="tipoNegocio" value="COMPRA"> COMPRA
                                <br>
                                <input type="radio" name="tipoNegocio" value="VENDA"> VENDA </td>
                            </tr>

                            <tr>
                                <td><input type="hidden" name="cod" value="<?php echo $codigo;?>" placeholder=""></td>
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

