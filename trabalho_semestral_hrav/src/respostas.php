<?php
// respostas.php

// Inclui o arquivo de conexão com o banco de dados
include 'bd.php';

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter a sugestão (feedback textual)
    $sugestao = isset($_POST['sugestao']) ? pg_escape_string($_POST['sugestao']) : null;
    $id_setor = 1;  // Defina o ID do setor (substitua conforme necessário)
    $id_dispositivo = 1;  // Defina o ID do dispositivo (substitua conforme necessário)

    // Iterar sobre as perguntas enviadas e inserir as respostas na tabela tbavaliacao
    foreach ($_POST as $key => $value) {
        // Verificar se o campo pertence a uma pergunta
        if (strpos($key, 'pergunta_') === 0) {
            // Extrair o ID da pergunta
            $id_pergunta = substr($key, 10);  // O ID da pergunta vem depois de "pergunta_"

            // Verificar se o valor de id_pergunta e a resposta são válidos
            if (isset($id_pergunta) && is_numeric($id_pergunta) && is_numeric($value) && $value >= 0 && $value <= 10) {
                // Verificar se a sugestão foi preenchida, senão será NULL
                $feedback_textual = ($sugestao && $sugestao !== "") ? "'" . pg_escape_string($sugestao) . "'" : "NULL";

                // Construir a consulta SQL para inserir os dados na tabela tbavaliacao
                $sql = "INSERT INTO public.tbavaliacao (id_setor, id_pergunta, id_dispositivo, resposta, feedback_textual)
                        VALUES ($id_setor, $id_pergunta, $id_dispositivo, $value, $feedback_textual)";

                // Executar a consulta SQL
                $result = pg_query($conn, $sql);
                
                // Verificar se houve erro na execução da consulta
                if ($result === false) {
                    echo "Erro ao salvar as respostas. Erro: " . pg_last_error($conn);
                    pg_close($conn);
                    exit;
                }
            } else {
                echo "Resposta inválida ou falta o ID da pergunta.";
                pg_close($conn);
                exit;
            }
        }
    }

    // Mensagem de sucesso após inserção
    echo "Respostas enviadas com sucesso!";
    // Fechar a conexão com o banco de dados
    pg_close($conn);
}
?>
