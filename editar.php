<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/custom.css" rel="stylesheet" type="text/css"/>


    </head>
    <?php
    include_once './conexao/conn.php';

    $id_get = $_GET['id'];

    $sql = "select * from tbl_crud where id = '$id_get'";
    $editar_sql = mysqli_query($link, $sql);

    foreach ($editar_sql as $editar) {
        ?>
        <body>
            <div class="container">
                <table class="table table-responsive">
                    <h2>Editar nomes e idade</h2>
                    <form action="editar.php" method="POST" class="form-group">
                        <tr>
                            <td>
                                nome:
                            </td>
                            <td> 
                                <input type="hidden" name="id" value="<?php echo $editar['id']; ?>" />

                                <input  class="form-control" type="text" name="nome" value="<?php echo $editar['nome']; ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Idade: 
                            </td>
                            <td>
                                <input   class="form-control" type="text" name="idade" value="<?php echo $editar['idade']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" name="btnEnviar" class="btn btn-warning btn-sm pull-right">Editar</button>
                            </td>
                        </tr>
                    </form>

                </table>
                <?php
            }

            if (isset($_POST['btnEnviar'])) {

                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                $sql = "update tbl_crud set nome ='$nome',idade='$idade' where id= '$id'  ";
                var_dump($sql);

                $xecutar_sql = mysqli_query($link, $sql);

                var_dump($xecutar_sql);
                if ($xecutar_sql > 0) {
                    header("location: index.php");
                    // echo "Atualizado com sucesso";
                } else {
                    echo "Erro ao tentar atualizar conteúdo!";
                }
            }
            ?>
        </div>
    </body>
</html>
