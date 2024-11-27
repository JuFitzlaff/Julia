<?php
// Conectar ao banco de dados
include 'bd.php';  // Arquivo com a conexão ao banco de dados

// Obter o ID da pergunta via GET
$id_pergunta = $_GET['id'];

// Verificar se o ID é válido
if (empty($id_pergunta) || !is_numeric($id_pergunta)) {
    echo "ID inválido!";
    exit;
}

// Excluir a pergunta (as avaliações serão excluídas automaticamente)
$query = "DELETE FROM public.tbpergunta WHERE id_pergunta = $1";
$result = pg_query_params($conn, $query, array($id_pergunta));

// Verificar se a exclusão foi bem-sucedida
if ($result) {
    echo "Pergunta excluída com sucesso!";
    header('Location: ../listagem.php');  // Redireciona para a listagem
    exit;
} else {
    echo "Erro ao excluir a pergunta!";
}

// Fechar a conexão
pg_close($conn);
?>