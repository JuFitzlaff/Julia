<?php
//Arquivo que lista as perguntas cadastradas
include 'bd.php';

$query = "SELECT * FROM public.tbpergunta";
$result = pg_query($conn, $query);
?>
