<?php

include_once './conexao/conn.php';

$id_get = $_GET['id'];

$sql = " delete from tbl_crud where id = '$id_get' ";
$apagado_sql = mysqli_query($link, $sql);
header("location: index.php");
