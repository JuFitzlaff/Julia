<?php
//Arquivo para editar/atualizar a pergunta e o status no banco de dados
include 'bd.php';

$id_pergunta = $_POST['id_pergunta'];
$descricao_pergunta = $_POST['descricao_pergunta'];
$status = $_POST['status'];

$query = "UPDATE public.tbpergunta SET descricao_pergunta = $1, status = $2 WHERE id_pergunta = $3";
$result = pg_query_params($conn, $query, array($descricao_pergunta, $status, $id_pergunta));

header('Location: ../listagem.php');

pg_close($conn);
?>
