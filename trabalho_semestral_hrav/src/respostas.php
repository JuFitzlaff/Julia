<?php
// respostas.php

// Inclui o arquivo de conexão com o banco de dados
include 'bd.php';

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter a sugestão (feedback textual)
    $sugestao = isset($_POST['sugestao']) ? pg_escape_string($_POST['sugestao']) : null;

    // Exibir conteúdo de $_POST para depuração
    echo "<pre>";
    var_dump($_POST);  // Verificar o que está sendo enviado
    echo "</pre>";

    // Iterar sobre as perguntas enviadas e inserir as respostas na tabela tbavaliacao
    foreach ($_POST as $key => $value) {
        // Verificar se o campo pertence a uma pergunta (name=pergunta_X)
        if (strpos($key, 'pergunta_') === 0) {
            // Extrair o ID da pergunta a partir do nome do campo
            $id_pergunta = substr($key, 9);  // O ID da pergunta começa após "pergunta_"

            // Verificar se o ID da pergunta foi extraído corretamente
            echo "ID da pergunta: $id_pergunta, Resposta: $value<br>";

            // Verificar se o valor de id_pergunta e a resposta são válidos
            if (isset($id_pergunta) && is_numeric($id_pergunta) && is_numeric($value) && $value >= 0 && $value <= 10) {
                // Verificar se a sugestão foi preenchida, senão será NULL
                $feedback_textual = ($sugestao && $sugestao !== "") ? "'" . pg_escape_string($sugestao) . "'" : "NULL";

                // Construir a consulta SQL para inserir os dados na tabela tbavaliacao
                $sql = "INSERT INTO public.tbavaliacao (id_pergunta, resposta, feedback_textual)
                        VALUES ($id_pergunta, $value, $feedback_textual)";

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

    // Fechar a conexão com o banco de dados
    pg_close($conn);

    // Redirecionar para a página 'obrigado.php' após a inserção bem-sucedida
    header("Location: ../obrigado.php");
    exit();
}
?>

