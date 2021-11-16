<?php
include_once '../../database/db.php';

$nome = $_POST['nome'];
$sobrenome = $_POST["sobrenome"];
$cpf_cnpj = $_POST["cpf_cnpj"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$telefone = $_POST["telefone"];

$destinatario = $_POST["destinatario"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$bairro = $_POST["bairro"];
$referencia = $_POST["referencia"];

try {
    $database->insert("endereco", [
        "destinatario" => $destinatario,
        "cep" => $cep,
        "cidade" => $cidade,
        "uf" => $uf,
        "rua" => $rua,
        "numero" => $numero,
        "complemento" => $complemento,
        "bairro" => $bairro,
        "referencia" => $referencia
    ]);
    $endereco_id = $database->id();
    
    
    $database->insert("clientes", [
        "id_endereco" => $endereco_id,
        "nome" => $nome,
        "sobrenome" => $sobrenome,
        "cpf_cnpj" => $cpf_cnpj,
        "data_nascimento" => $data_nascimento,
        "email" => $email,
        "senha" => hash('sha256', $senha),
        "telefone" => $telefone,
        "ativo" => true
    ]);
    header('Location:../../login');
} catch (\Throwable $th) {
    echo "Um erro ocorreu..";
}


?>