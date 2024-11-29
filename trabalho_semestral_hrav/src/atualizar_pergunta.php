<?php
//Conectar ao banco de dados
include 'bd.php';

//Obter os dados do formulário
$id_pergunta = $_POST['id_pergunta'];
$descricao_pergunta = $_POST['descricao_pergunta'];
$status = $_POST['status'];

//Atualizar a pergunta e o status no banco de dados
$query = "UPDATE public.tbpergunta SET descricao_pergunta = $1, status = $2 WHERE id_pergunta = $3";
$result = pg_query_params($conn, $query, array($descricao_pergunta, $status, $id_pergunta));

header('Location: ../listagem.php');  // Redireciona para a listagem após a atualização

//Fechar a conexão com o banco de dados
pg_close($conn);
?>
