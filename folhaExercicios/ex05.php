<!DOCTYPE html>
<!--5. Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue
abaixo. Crie as variáveis apropriadas para o cálculo em PHP e por fim exiba uma frase
com o valor da operação.

Fórmula -> Resultado = (Base * Altura) / 2-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 05</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Área do Triângulo Retângulo</h1>

        <form method="POST">
            <label for="base">Informe a base do triângulo retângulo:</label>
            <input id="base" type="number" name="base">
        <br>
            <label for="altura">Informe a altura do triângulo retângulo:</label>
            <input id="altura" type="number" name="altura">
        <br>
        <br>
        <button type='submit' id="botao">Resultado</button>
        <br>
        <?php
            $base =  isset($_POST['base']) ? $_POST['base'] : 0;
            $altura =  isset($_POST['altura']) ? $_POST['altura'] : 0;

            $area = ($base * $altura) / 2;

            echo "<h3>Resultado: ".$area;
        ?>
    </body>
</html>