<?php
//Arquivo para conexão com o banco de dados
$host = 'localhost';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres';
$password = '12345';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo 'Falha na conexão com o banco de dados.';
    exit;
}
?>