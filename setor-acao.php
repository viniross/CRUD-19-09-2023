<?php
include_once './_conexao.php';

// captura do post
$nome = $_POST['txtNome'];
$andar = $_POST['nmbrAndar'];
$cor = $_POST['txtCor'];
$id = $_POST['id'];

// montando o SQL
if (empty($id)) {
    $sql = "INSERT INTO setor ( Nome, Andar, Cor) VALUES('$nome', '$andar' , '$cor');";
}else{
    $sql = "UPDATE setor SET Nome = '$nome', Andar = $andar , Cor = '$cor' WHERE SetorID =".$id;
}

mysqli_query($conexao,$sql);



// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>