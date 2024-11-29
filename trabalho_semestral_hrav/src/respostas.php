<?php
//Conectar ao banco de dados
include 'bd.php';

//Verificar se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obter a sugestão (feedback)
    $sugestao = isset($_POST['sugestao']) ? pg_escape_string($_POST['sugestao']) : null;

    //Inserir as respostas na tabela do banco
    foreach ($_POST as $key => $value) {
        //Verificar se o campo pertence a uma pergunta (name=pergunta_X)
        if (strpos($key, 'pergunta_') === 0) {
            //Extrair o ID da pergunta a partir do nome do campo
            $id_pergunta = substr($key, 9);

            //Verificar se o valor de id_pergunta e a resposta são válidos
            if (isset($id_pergunta) && is_numeric($id_pergunta) && is_numeric($value) && $value >= 0 && $value <= 10) {
                //Verificar se a sugestão foi preenchida,
                $feedback = ($sugestao && $sugestao !== "") ? "'" . pg_escape_string($sugestao) . "'" : "NULL";

                //Inserir os dados na tabela
                $sql = "INSERT INTO public.tbavaliacao (id_pergunta, resposta, feedback)
                        VALUES ($id_pergunta, $value, $feedback)";

                //Executar a consulta SQL
                $result = pg_query($conn, $sql);
            }
        }
    }
    //Fechar a conexão com o banco de dados
    pg_close($conn);

    //Redirecionar para a página de obrigado
    header("Location: ../obrigado.php");
    exit();
}
?>