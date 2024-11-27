<?php
// Conectar ao banco de dados
include 'bd.php';  // Arquivo com a conexão ao banco de dados

// Obter os dados do formulário
$id_pergunta = $_POST['id_pergunta'];
$descricao_pergunta = $_POST['descricao_pergunta'];
$status = $_POST['status'];

// Verificar se os dados são válidos
if (empty($id_pergunta) || !is_numeric($id_pergunta)) {
    echo "ID inválido!";
    exit;
}

// Atualizar a pergunta e o status no banco de dados
$query = "UPDATE public.tbpergunta SET descricao_pergunta = $1, status = $2 WHERE id_pergunta = $3";
$result = pg_query_params($conn, $query, array($descricao_pergunta, $status, $id_pergunta));

// Verificar se a atualização foi bem-sucedida
if ($result) {
    header('Location: ../listagem.php');  // Redireciona para a listagem após a atualização
    exit;
} else {
    echo "Erro ao atualizar a pergunta: " . pg_last_error($conn);
}

// Fechar a conexão com o banco de dados
pg_close($conn);
?>
