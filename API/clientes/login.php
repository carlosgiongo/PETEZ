<?php
include_once '../../database/db.php';

$email = $_POST['email'];
$senha = hash('sha256', $_POST['senha']);

$data = $database->select("clientes", [
	"nome",
	"sobrenome",
    "email",
], [
	"email" => $email,
    "senha" => $senha
]);

if(count($data) < 1){
    echo "Sem resultados..";
} else {
    echo "Usuario cadastrado!";
}
?>