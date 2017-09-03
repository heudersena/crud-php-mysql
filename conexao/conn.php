<?php

$link = mysqli_connect('127.0.0.1', 'root', '123456', 'cruzinho');

if ($link > 0) {
//    echo "conexao realizada com sucesso";
} else {
    echo 'Erro ao tentar conectar com o banco de dados';
}