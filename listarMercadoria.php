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
                        $sql = "SELECT * FROM tbl_mercadoria";
                        $consulta = mysqli_query($conn,$sql);
                    ?>

                    <form action="deletar_usuario.php" method="post">
                        <h1>Listar Mercadorias</h1>    
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tipo</th>
                                        <th>Nome</th>
                                        <th>Quantidade</th>
                                        <th>Preço</th>
                                        <th>Tipo Mercadoria</th>
                                        <th>* Alterar *</th>
                                        <th>* Excluir *</th>
                                    </tr>
                                </thead>
                            
                            <?php

                                if (mysqli_num_rows($consulta) > 0) {
                                    // Saida de linha em linha
                                    while($row = mysqli_fetch_assoc($consulta)) {
                            ?>
                                        
                            <tbody>
                                <tr>
                                    <td><?php echo $row["cod_mercadoria"];?></td>
                                    <td><?php echo $row["tipo_mercadoria"];?></td>
                                    <td><?php echo $row["nome_mercadoria"];?></td>
                                    <td><?php echo $row["quantidade"];?></td>
                                    <td><?php echo $row["preco"];?></td>
                                    <td><?php echo $row["tipoNegocio"];?></td>
                                    <td><a href="alterarMercadoria.php?codigo=<?php echo $row["cod_mercadoria"];?>"><i class="icon-pencil"></i></a></td>
                                    <td><a href="excluirMercadoria.php?codigo=<?php echo $row["cod_mercadoria"];?>"><i class="icon-trash"></i></a></td>
                                </tr>
                            </tbody>
 
                            <?php
                                }
                                
                                } else {
                                    echo "0 results";

                                }
                            ?>
                            
                    </table>
                </div><!--/span-->
            </div><!--/row-->
        </div>
    </body>
</html>