<?php
include_once '../includes/_dados.php';
include_once '_head.php';

$sql = "SELECT * FROM categorias";
$resultado = mysqli_query($conexao,$sql);

?>

<main>
    <h2>Administração dos Produtos</h2>

    <form action="categorisa-processo.php" method="post">
    <input type="text" value="salvar" name="acao">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="name"><br>
        <label for="descricao">Descrição</label><br>
        
    </form>
</main>