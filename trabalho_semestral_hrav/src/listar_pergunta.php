<?php
//Conectar ao banco de dados
include 'bd.php';

//Consulta SQL para buscar todas as perguntas cadastradas
$query = "SELECT * FROM public.tbpergunta";
$result = pg_query($conn, $query);
?>
