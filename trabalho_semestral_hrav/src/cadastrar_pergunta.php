<?php
//Conectar ao banco de dados
include 'bd.php';

//Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obter os dados do formulário
    $descricao_pergunta = pg_escape_string($_POST['descricao_pergunta']);
    
    //Definir o status da pergunta
    $status = true; 

    //Inserir uma nova pergunta
    $sql = "INSERT INTO public.tbpergunta (descricao_pergunta, status)
            VALUES ('$descricao_pergunta', " . ($status ? 'TRUE' : 'FALSE') . ")";

    //Executar a consulta
    $result = pg_query($conn, $sql);

    header('Location: ../listagem.php');
}
//Fechar a conexão com o banco de dados
pg_close($conn);
?>

