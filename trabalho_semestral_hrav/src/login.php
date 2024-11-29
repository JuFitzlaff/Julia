<?php
//Começar a sessão
session_start();  

//Conectar ao banco de dados
include 'bd.php';

//Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    //Evitar SQL Injection
    $email = pg_escape_string($conn, $email);
    
    //Consultar o banco de dados para encontrar o usuário com o email fornecido
    $query = "SELECT * FROM public.tbusuario_administrativo WHERE login = '$email'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) == 1) {
        //O usuário foi encontrado, agora será verificado a senha
        $user = pg_fetch_assoc($result);

        //Verificar se a senha fornecida corresponde ao do banco
        if ($senha == $user['senha']) {
            //Criar sessão
            $_SESSION['user_id'] = $user['id_usuario'];
            $_SESSION['email'] = $user['login'];
        
            //Redirecionar para a página de listagem
            header("Location: ../listagem.php");
            exit();
        } else {
            echo "Senha incorreta";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>
