<?php 
session_start();
if(empty($_SESSION['ID'])){
    header('Location:/');
}

include_once '../../database/db.php';
//MOSTRAR CLIENTES CADASTRADOS
$data = $database -> select("FUNCIONARIOS",["ID"]);
$_SESSION["ID"]= $data[0]["ID"];
print_r($_SESSION["ID"]);
//CADASTRAR CLIENTES
// $FUNC_MAT =$_POST['cliente_codigo'];
// $FUNC_FILIAL =$_POST['cliente_codigo'];
// $FUNC_NOME =$_POST['cliente_codigo'];
// $FUNC_NOMECMP =$_POST['cliente_codigo'];
// $FUNC_ADMISSA =$_POST['cliente_codigo'];
// $FUNC_SEXO =$_POST['cliente_codigo'];
// $FUNC_CODFUNC =$_POST['cliente_codigo'];
// $FUNC_FUNCAO =$_POST['cliente_codigo'];
// $FUNC_DTNASC =$_POST['cliente_codigo'];
// $FUNC_ESTCIV =$_POST['cliente_codigo'];
// $FUNC_ATIVO =$_POST['cliente_codigo'];


 $database -> insert("  ", [
     "FUNC_MAT" => "000002",
     "FUNC_FILIAL" => "001",
     "FUNC_NOME" => "CARLOS EDUARDO",
     "FUNC_NOMECMP" => "CARLOS EDUARDO GIONGO",
     "FUNC_ADMISSA" => "20210101",
     "FUNC_SEXO" => "M",
     "FUNC_CODFUNC" => "000001",
     "FUNC_FUNCAO" => "DESENVOLVEDOR",
     "FUNC_DTNASC" => "20030101",
     "FUNC_ESTCIV" =>"S",
     "FUNC_ATIVO" =>"2",

 ]);


?>

