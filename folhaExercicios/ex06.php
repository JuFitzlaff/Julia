<!DOCTYPE html>
<!--6. Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha.

Crie um programa que calcule o valor gasto com cada produto comprado, sendo o
resultado do valor individual do produto em Kg multiplicado pela quantidade em Kg
comprada por Joãozinho.

Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será
o suficiente para pagar a conta, caso falte dinheiro escrever uma frase em vermelho
com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em
azul e o valor que Joãozinho ainda poderia gastar.

Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma
frase em verde afirmando que o saldo para compras foi esgotado.-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 06</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Compras da Feira</h1>

        <form method="POST">
            <label for="maca">Maçã (R$ 4,00/kg):</label>
            <input id="maca" type="number" name="maca">
        <br>
            <label for="melancia">Melância (R$ 7,00/kg):</label>
            <input id="melancia" type="number" name="melancia">
        <br>
            <label for="laranja">Laranja (R$ 4,50/kg):</label>
            <input id="laranja" type="number" name="laranja">
        <br>
            <label for="repolho">Repolho (R$ 5,50/kg):</label>
            <input id="repolho" type="number" name="repolho">
        <br>
            <label for="cenoura">Cenoura (R$ 2,75/kg):</label>
            <input id="cenoura" type="number" name="cenoura">
        <br>
            <label for="batatinha">Batatinha (R$ 3,00/kg):</label>
            <input id="batatinha" type="number" name="batatinha">
        <br>
        <br>
        <button type='submit' id="botao">Total Compra</button>
        <br>
        <?php
            $valorKg = array(4.00, 7.00, 4.50, 5.50, 2.75, 3.00);
            $qtdeKg = array(
                isset($_POST['maca']) ? $_POST['maca'] : 0,
                isset($_POST['melancia']) ? $_POST['melancia'] : 0,
                isset($_POST['laranja']) ? $_POST['laranja'] : 0,
                isset($_POST['repolho']) ? $_POST['repolho'] : 0,
                isset($_POST['cenoura']) ? $_POST['cenoura'] : 0,
                isset($_POST['batatinha']) ? $_POST['batatinha'] : 0);

            function valorCompra($valorKg, $qtdeKg) {
                $total = 0;
                for ($i = 0; $i < count($valorKg); $i++) {
                    $valorTotal = $valorKg[$i] * $qtdeKg[$i];
                    $total += $valorTotal;
                }
                return $total;
            }

            $totalCompra = valorCompra($valorKg, $qtdeKg);
            echo "<h3>Valor total da compra: R$ ".number_format($totalCompra, 2, ',', '.')."</h3>";

            function previsaoDinheiro($totalCompra) {
                $dinheiroDisponivel = 50.00;
                $mensagem = '';

                if ($totalCompra < $dinheiroDisponivel) {
                    $saldo = $dinheiroDisponivel - $totalCompra;
                    $mensagem = "<span style='color: blue;'>Ainda pode gastar R$ ".number_format($saldo, 2, ',', '.').".</span>";
                } elseif ($totalCompra > $dinheiroDisponivel) {
                    $faltando = $totalCompra - $dinheiroDisponivel;
                    $mensagem = "<span style='color: red;'>Gastou R$ ".number_format($faltando, 2, ',', '.')." a mais do que tinha disponível.</span>";
                } else {
                    $mensagem = "<span style='color: green;'>O saldo para compras foi esgotado.</span>";
                }
                return $mensagem;
            }
            echo previsaoDinheiro($totalCompra);
        ?>
    </body>
</html>