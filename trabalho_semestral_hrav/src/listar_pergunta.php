<?php
// Conectar ao banco de dados
include 'bd.php';  // Arquivo com a conexão ao banco de dados

// Consulta SQL para buscar todas as perguntas cadastradas
$query = "SELECT * FROM public.tbpergunta";
$result = pg_query($conn, $query);

// Verificar se a consulta foi bem-sucedida
if (!$result) {
    echo "Erro ao consultar as perguntas: " . pg_last_error($conn);
    exit;
}

// Não fechamos a conexão aqui, pois ela será fechada quando o script terminar de ser executado
?>
