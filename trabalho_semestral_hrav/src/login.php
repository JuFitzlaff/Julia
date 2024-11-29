<?php
//Arquivo que valida o login do usuário
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $query = "SELECT * FROM public.tbusuario_administrativo WHERE login = '$email'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) == 1) {
        $user = pg_fetch_assoc($result);

        if ($senha == $user['senha']) {
            $_SESSION['user_id'] = $user['id_usuario'];
            $_SESSION['email'] = $user['login'];
    
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
