<?php 
include_once '../../database/db.php';
//MOSTRAR CLIENTES CADASTRADOS
$data = $database -> select("CLIENTES",["CLIENTE_NOME", "CLIENTE_CPF_CNPJ"]);
print_r($data);
//CADASTRAR CLIENTES
$database -> insert("CLIENTES", [
    "CLIENTE_CODIGO" => "000000000",
    "CLIENTE_NOME" => "CARLOS EDUARDO GIONGO",
    "CLIENTE_TIPO" => "F",
    "CLIENTE_RG" => "0000000",
    "CLIENTE_DDD" => "049",
    "CLIENTE_TELEFONE" => "00000000",
    "CLIENTE_CELULAR" => "000000000",
    "CLIENTE_EMAIL" => "carlosgiongo@petez.com.br",
    "CLIENTE_NACIONALIDADE" => "B",
    "CLIENTE_INSCRICAO" =>"ISENTO",
    "CLIENTE_CPF_CNPJ" =>"00000000000",
    "CLIENTE_SEXO" => "M",
    "CLIENTE_ESTCIV" => "S",
    "D_E_L_E_T_" => ""
]);

print_r($data)
?>

