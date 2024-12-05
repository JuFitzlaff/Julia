<!--Faça uma adaptação para ler os dados retornados do navegador e validar se eles existem.

- Caso algum dado (usuário e time) não existirem, exibir alerta de que os dados da sessão foram perdidos.-->
<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$_SESSION['user']['last_request'] = date('Y-m-d H:i:s');

$sessionStart = strtotime($_SESSION['user']['session_start']);
$currentTime = time();
$sessionDuration = $currentTime - $sessionStart;
$sessionDurationFormatted = gmdate('H:i:s', $sessionDuration);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Seja Bem Vindo(a), <?= htmlspecialchars($_SESSION['user']['login']); ?></h1>
    <p><strong>Login:</strong> <?= htmlspecialchars($_SESSION['user']['login']); ?></p>
    <p><strong>Senha:</strong> <?= htmlspecialchars($_SESSION['user']['password']); ?></p>
    <p><strong>Data/Hora de início da sessão:</strong> <?= $_SESSION['user']['session_start']; ?></p>
    <p><strong>Data/Hora da última requisição:</strong> <?= $_SESSION['user']['last_request']; ?></p>
    <p><strong>Tempo de sessão:</strong> <?= $sessionDurationFormatted; ?></p>
    <br>
    <button onclick="window.location.href='logout.php'">Sair</button>
    
</body>
</html>