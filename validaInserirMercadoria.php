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

					$tipo = $_POST['tipo'];
					$nome = $_POST['nome'];
					$qtd = $_POST['quantidade'];
					$preco = $_POST['preco'];
					$tipoNeg = $_POST['tipoNegocio'];
					
					// faz consulta no banco para inserir os dados do usuario
					$sql = "INSERT INTO tbl_mercadoria (tipo_mercadoria, nome_mercadoria, quantidade, preco, tipoNegocio) VALUES ('$tipo','$nome','$qtd','$preco','$tipoNeg')";
					$consulta = mysqli_query($conn, $sql);
                
                	if ($consulta >= 1) {
                		echo 'Inserido com Sucesso' ;
                	}else{
                		echo 'Não foi possível inserir' . mysqli_connect_error();
                	}

                	?>

                </div><!--/span-->
            </div><!--/row-->
        </div>
    </body>
</html>