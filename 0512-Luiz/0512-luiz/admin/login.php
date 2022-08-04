<?php
session_start();

include_once '../includes/_banco.php';

$usuario = ( isset($_POST['txtUsuario']) || !empty($_POST['txtUsuario']) ) ? $_POST['txtUsuario'] : ;
$senha = (isset($_POST['txtSenha']) || !empty($_POST['txtSenha']) ) ? $_POST['txtSenha'];
$usuario = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];

$erro='';

function ErroLogin($erro){
    if( !empty($erro))
}
?>