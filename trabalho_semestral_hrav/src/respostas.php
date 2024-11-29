<?php
//Arquivo para inserir as respostas no banco de dados
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $sugestao = isset($_POST['sugestao']) ? pg_escape_string($_POST['sugestao']) : null;

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'pergunta_') === 0) {
            $id_pergunta = substr($key, 9);

            if (isset($id_pergunta) && is_numeric($id_pergunta) && is_numeric($value) && $value >= 0 && $value <= 10) {
                $feedback = ($sugestao && $sugestao !== "") ? "'" . pg_escape_string($sugestao) . "'" : "NULL";

                $sql = "INSERT INTO public.tbavaliacao (id_pergunta, resposta, feedback)
                        VALUES ($id_pergunta, $value, $feedback)";

                $result = pg_query($conn, $sql);
            }
        }
    }
    pg_close($conn);

    header("Location: ../obrigado.php");
    exit();
}
?>