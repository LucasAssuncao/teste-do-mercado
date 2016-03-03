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

					// recebe dados do formulario
                    $cod = $_POST['cod'];
					$tipo = $_POST['tipo'];
					$nome = $_POST['nome'];
					$qtd = $_POST['quantidade'];
					$preco = $_POST['preco'];
					$tipoNeg = $_POST['tipoNegocio'];
					
					// faz consulta no banco para inserir os dados do usuario
					$sql = "UPDATE tbl_mercadoria SET tipo_mercadoria = '$tipo', nome_mercadoria = '$nome', quantidade = '$qtd', preco = '$preco', tipoNegocio = '$tipoNeg' WHERE cod_mercadoria = '$cod'";
					$consulta = mysqli_query($conn, $sql);
                
                	if ($consulta >= 1) {
                		echo 'Atualizado com Sucesso' ;
                	}else{
                		echo 'Não foi possível inserir' . mysqli_connect_error();
                	}

                	?>

                </div><!--/span-->
            </div><!--/row-->
        </div>
    </body>
</html>