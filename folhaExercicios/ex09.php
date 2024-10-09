<!DOCTYPE html>
<!--9. Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas
pena que ele não sabia da mesma chance que Paulinho.
A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o
valor das parcelas.

As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36,
48 e 60 vezes o juro nesta empresa inicia em 2% para 24 vezes e aumenta 0,3% para
as opções de parcelamento seguintes.
Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da
parcela para cada uma das opções a ser estudada por Juquinha.
M = C * (1 + i)t , onde:
M = Montante
C = Capital Inicial
i = Taxa de juros
t = Tempo-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 09</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Valor das Parcelas (Juros Compostos)</h1>

        <?php
            function calcularParcelas($valorMoto, $parcelas, $juros) {
                $i = $juros / 100;
                $montante = $valorMoto * ((1 + $i)**$parcelas);
                $valorParcela = $montante / $parcelas;
                return $valorParcela;
            }
            $valorMoto = 8654.00;
            $jurosInicial = 2.0;
            $parcelasOpcoes = [24, 36, 48, 60];

            foreach ($parcelasOpcoes as $chave => $parcelas) {
                $juros = $jurosInicial + ($chave * 0.3);
                $valorParcela = calcularParcelas($valorMoto, $parcelas, $juros);
                echo "Valor da parcela para ".$parcelas."x (taxa de juros: ".number_format($juros, 2)."%): R$ ".number_format($valorParcela, 2, ',', '.')."<br>";
            }
        ?>
    </body>
</html>