<?php
include_once '../../database/db.php';
//session_destroy();

$email = $_POST['email'];
$senha = hash('sha256', $_POST['senha']);

$data = $database->select("clientes", [
    "id",
	"nome",
	"sobrenome",
    "email",
], [
	"email" => $email,
    "senha" => $senha
]);

if(count($data) < 1){
    echo "Sem resultados..";
    header('Location:../../login');
} else {
    session_destroy();
    session_start();
    $_SESSION['id'] = $data[0]['id'];
    $_SESSION['nome'] = $data[0]['nome']." ".$data[0]['sobrenome'];
    $_SESSION['email'] = $data[0]['email'];
    header('Location:../../');
}
?>