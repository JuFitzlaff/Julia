<!DOCTYPE html>
<!--8. Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois
utiliza Juros Simples para o cálculo das parcelas.
Sabendo então que o valor a vista do moto é R$ 8.654,00.
Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que
a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
24 vezes
36 vezes
48 vezes
60 vezes-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 08</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Valor das Parcelas (Juros Simples)</h1>

        <?php
            function calcularParcelas($valorMoto, $parcelas, $juros) {
                $n = $parcelas;
                $i = $juros / 100;
                $valorTotal = $valorMoto * (1 + $i * $n);
                $valorParcela = $valorTotal / $n;
                return $valorParcela;
            }
            $valorMoto = 8654.00;
            $jurosInicial = 1.5;
            $parcelasOpcoes = [24, 36, 48, 60];
            
            foreach ($parcelasOpcoes as $chave => $parcelas) {
                $juros = $jurosInicial + ($chave * 0.5);
                $valorParcela = calcularParcelas($valorMoto, $parcelas, $juros);
                echo "Valor da parcela para ".$parcelas."x (taxa de juros: ".number_format($juros, 2)."%): R$ ".number_format($valorParcela, 2)."<br>";
            }
        ?>
    </body>
</html>

