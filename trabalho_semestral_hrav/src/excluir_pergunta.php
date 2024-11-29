<?php
//Arquivo para excluir as perguntas
include 'bd.php';

$id_pergunta = $_GET['id'];

$query = "DELETE FROM public.tbpergunta WHERE id_pergunta = $1";
$result = pg_query_params($conn, $query, array($id_pergunta));

header('Location: ../listagem.php');

pg_close($conn);
?>