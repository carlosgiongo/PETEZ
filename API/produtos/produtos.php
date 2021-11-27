<?php
include_once '../../database/db.php';
//session_start();
$all_produtos = $database->select("produtos", [
    "ID",
    "NOME",
    "PRECO_VENDA",
    "IMAGEM"
]);

echo json_encode($all_produtos);
// echo $todos_produtos;
?>