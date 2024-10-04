<!DOCTYPE html>
<!--3. Crie um programa que calcule a área de um quadrado. Você deve configurar uma
variável que representa o comprimento dos lados de um quadrado em metros. Após o
cálculo escrever uma frase com o resultado da operação, exemplo: “A área do
quadrado de lado 3 metros é 9 metros quadrados”-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 03</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Área do Quadrado</h1>

        <form method="POST">
            <label for="num">Informe o comprimento (em metros) do quadrado:</label>
            <input id="num" type="number" name="num">
        <br>
        <br>
        <button type='submit' id="botao">Resultado</button>
        <br>
        <?php
            $n =  isset($_POST['num']) ? $_POST['num'] : 0;
            $area = $n * $n;

            echo "<h3>A área do quadrado de lado ".$n." metros é ".$area." metros quadrados.</h3>";
        ?>
    </body>
</html>

       
            