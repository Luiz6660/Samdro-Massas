<?php
include_once '../includes/_banco.php';
include_once './_header.php';
include_once './_menu.php';
$TiposErros= array(
    1=>'preencha os dados corretamente!',
2=>'Usuário não localizado!',
3=>'Grato por usar nosso sistema :)');

$erro = $_GET['erro'];
echo $tipoErros[$erro];

?>

<form action="./login.php" method="post">
    <ul>
        <li>
            <label>Usuário</label>
            <input type="text" name="txtUsuario">
        </li>
    </ul>
</form>