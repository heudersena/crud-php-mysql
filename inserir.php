<?php

include_once ("./conexao/conn.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$sql = "insert into tbl_crud (nome,idade) values ('$nome','$idade')";
$insert_sql = mysqli_query($link, $sql);

if ($insert_sql > 0) {
    header("location: index.php");
    //echo "Inserção realizada com sucesso!";
} else {
    echo "Falha ao tentar inserir registro no banco de dados";
}
