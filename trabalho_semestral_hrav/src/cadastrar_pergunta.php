<?php
// Conectar ao banco de dados
include 'bd.php';  // Arquivo com a conexão ao banco de dados

// Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $descricao_pergunta = pg_escape_string($_POST['descricao_pergunta']);
    
    // Definir o status da pergunta (como TRUE para ativo)
    $status = true;  // Ou false, dependendo do caso

    // Inserir a nova pergunta na tabela tbpergunta
    $sql = "INSERT INTO public.tbpergunta (descricao_pergunta, status)
            VALUES ('$descricao_pergunta', " . ($status ? 'TRUE' : 'FALSE') . ")";

    // Executar a consulta
    $result = pg_query($conn, $sql);

    // Verificar se houve erro na execução da consulta
    if ($result) {
        // Se a inserção for bem-sucedida, redirecionar para listagem.php
        header('Location: ../listagem.php');
        exit();  // Certifique-se de que o script termina aqui após o redirecionamento
    } else {
        // Se houver erro, exibir mensagem
        echo "Erro ao cadastrar a pergunta: " . pg_last_error($conn);
    }
}

// Fechar a conexão com o banco de dados
pg_close($conn);
?>

