<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body><br>
        <div class="container">
            <table class="table table-responsive">

                <form action="inserir.php" method="POST" class="form-group">
                    <tr>
                        <td>
                            <p id="campo">nome:</p>
                        </td>
                        <td>
                            <input type="text" name="nome" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="campo">Idade:</p>
                        </td>
                        <td>
                            <input type="text" name="idade" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="btnEnviar" class="btn btn-primary btn-sm pull-right">enviar</button>
                        </td>
                    </tr>
                </form>

            </table>

            <?php
            include_once './conexao/conn.php';
            $sql = "select * from tbl_crud";
            $execult_sql = mysqli_query($link, $sql);
            ?>

            <table class="table table-responsive table-bordered table-hover">
                <h2 class="text-center">Tabela - crud com PHP 7.1 e Mysqli</h2>
                <tr id="linhaTable">
                    <td>Nome:</td>
                    <td>Idade:</td>
                    <td>Ação:</td>
                </tr>
                <?php
                foreach ($execult_sql as $valor):
                    ?>
                    <tr>
                        <td><?php echo $valor['nome']; ?></td>
                        <td class="text-center"><?php echo $valor['idade']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-warning btn-sm"><a href="editar.php?id=<?php echo $valor['id']; ?>">Editar</a></button>
                            <button class="btn btn-danger btn-sm"><a href="excluir.php?id=<?php echo $valor['id']; ?>">Apagar</a></button>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>



        </div>

    </body>
</html>
