<?php
//Arquivo para cadastrar as perguntas
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao_pergunta = pg_escape_string($_POST['descricao_pergunta']);
    
    $status = true; 

    $sql = "INSERT INTO public.tbpergunta (descricao_pergunta, status)
            VALUES ('$descricao_pergunta', " . ($status ? 'TRUE' : 'FALSE') . ")";

    $result = pg_query($conn, $sql);

    header('Location: ../listagem.php');
}
pg_close($conn);
?>

