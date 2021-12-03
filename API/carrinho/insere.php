<?php
session_start();

$soma = 0;
$produto_id = $_POST['idProduto'];
$produto_nome = $_POST['nomeProduto'];
$produto_valor = $_POST['precoProduto'];
$produto_quantidade = 1;

//if(empty($_SESSION['ID'])){
//    header('Location:../../login.php');
//}

if(empty($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = new stdClass;
    $_SESSION['carrinho']->itens = array();

    $objeto = array(1, $produto_nome, $produto_valor, $produto_quantidade);
    array_push($_SESSION['carrinho']->itens, $objeto);
} else {
    $objeto = array(1, $produto_nome, $produto_valor, $produto_quantidade);
    array_push($_SESSION['carrinho']->itens, $objeto);
}

foreach ($_SESSION['carrinho']->itens as $produto) {
    $soma += $produto[2] * $produto[3];  
}

$_SESSION['carrinho']->total = $soma;

var_dump($_SESSION['carrinho']->itens)
//header('Location:../../index')
?>