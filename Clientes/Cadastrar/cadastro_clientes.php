<?php 
session_start();
if(empty($_SESSION['ID'])){
    header('Location:/');
}

include_once '../../database/db.php';
//MOSTRAR CLIENTES CADASTRADOS
$data = $database -> select("CLIENTES",["ID"]);
$_SESSION["ID"]= $data[0]["ID"];
print_r($_SESSION["ID"]);
//CADASTRAR CLIENTES
// $CLIENTE_CODIGO =$_POST['cliente_codigo'];
// $CLIENTE_NOME =$_POST['cliente_codigo'];
// $CLIENTE_TIPO =$_POST['cliente_codigo'];
// $CLIENTE_RG =$_POST['cliente_codigo'];
// $CLIENTE_DDD =$_POST['cliente_codigo'];
// $CLIENTE_TELEFONE =$_POST['cliente_codigo'];
// $CLIENTE_CELULAR =$_POST['cliente_codigo'];
// $CLIENTE_EMAIL =$_POST['cliente_codigo'];
// $CLIENTE_NACIONALIDADE =$_POST['cliente_codigo'];
// $CLIENTE_INCRICAO =$_POST['cliente_codigo'];
// $CLIENTE_CPF_CNPJ =$_POST['cliente_codigo'];
// $CLIENTE_SEXO =$_POST['cliente_codigo'];
// $CLIENTE_ESTCIV =$_POST['cliente_codigo'];

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


?>

