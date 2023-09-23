<?php
include_once './_conexao.php';

$id = $_GET['id'];


// faz o redirecionamento
header("Location: ./setor-lista.php", true, 302);
exit();
?>