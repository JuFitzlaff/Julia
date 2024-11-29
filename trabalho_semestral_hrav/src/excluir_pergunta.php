<?php
//Conectar ao banco de dados
include 'bd.php';

//Obter o ID da pergunta via GET
$id_pergunta = $_GET['id'];

//Excluir a pergunta
$query = "DELETE FROM public.tbpergunta WHERE id_pergunta = $1";
$result = pg_query_params($conn, $query, array($id_pergunta));

header('Location: ../listagem.php');  // Redireciona para a listagem

//Fechar a conexão
pg_close($conn);
?>