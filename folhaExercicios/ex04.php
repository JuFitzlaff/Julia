<!DOCTYPE html>
<!--4. Crie um programa que calcule a área de um retângulo. Você deve configurar duas
variáveis que representam os lados a e base desse quadrado em metros. Após o cálculo
escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de
lados 3 e 2 metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase
usando a tag h1, se não, escrever com h3.-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 04</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Área do Retângulo</h1>

        <form method="POST">
            <label for="lado">Informe o lado (em metros) do retângulo:</label>
            <input id="lado" type="number" name="lado">
        <br>
            <label for="base">Informe a base (em metros) do retângulo:</label>
            <input id="base" type="number" name="base">
        <br>
        <br>
        <button type='submit' id="botao">Resultado</button>
        <br>
        <?php
            $lado =  isset($_POST['lado']) ? $_POST['lado'] : 0;
            $base =  isset($_POST['base']) ? $_POST['base'] : 0;

            function areaRetangulo($lado, $base) {
                return $lado * $base;
            }
            $area = areaRetangulo($lado, $base);

            function estiloResultado($lado, $base, $area) {
                if ($area > 10) {
                    return "<h1>A área do retângulo de lados ".$lado." e ".$base." metros é ".$area." metros quadrados.</h1>";
                } else {
                    return "<h3>A área do retângulo de lados ".$lado." e ".$base." metros é ".$area." metros quadrados.</h3>";
                }
            }
            echo estiloResultado($lado, $base, $area);
        ?>
    </body>
</html>