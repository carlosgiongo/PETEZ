<?php
session_start();
$produto = $_POST['produto_id']; 

if(empty($_SESSION['ID'])){
    header('Location:/');
}


?>