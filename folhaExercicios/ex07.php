<!DOCTYPE html>
<!--7. Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como
ela não tem esse dinheiro para comprar a vista, resolveu fazer um financiamento, que
ficou em 60 parcelas de R$ 489,65.
Escreva um programa que calcule o valor gasto só dos juros que serão pagos por
Mariazinha em comparação ao valor a vista do carro.-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 07</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Valor Juros do Carro</h1>

        <?php
            $valorAVista = 22500.00;
            $valorParcela = 489.65;
            $numParcelas = 60;

            function totalPago($valorParcela, $numParcelas) {
                $totalPago = $valorParcela * $numParcelas;
                return $totalPago;
            }

            function jurosPago($totalPago, $valorAVista) {
                return $totalPago - $valorAVista;
            }
            $totalPago = totalPago($valorParcela, $numParcelas);
            $jurosPago = jurosPago($totalPago, $valorAVista); 

            echo "Valor à vista: ".number_format($valorAVista, 2, ',', '.')."<br>";
            echo "Valor total parcelado: ".number_format($totalPago, 2, ',', '.')."<br>";
            echo "Valor total gasto com juros: ".number_format($jurosPago, 2, ',', '.');
        ?>
    </body>
</html>