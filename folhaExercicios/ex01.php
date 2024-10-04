<!DOCTYPE html>
<!--1. Criar um programa que execute a soma de três valores.
Se a primeira variável for maior que 10, escrever o resultado da operação em azul;
Se a segunda variável for menor que a terceira, escrever o resultado em verde;
Se a terceira variável for menor que a primeira e a segunda variável escrever o resultado em vermelho-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 01</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Soma de Valores</h1>
        
        <form action="" method="POST">
            <label for="num1">Informe o 1º número:</label>
            <input id="num1" type="number" name="num1">
        <br>
            <label for="num2">Informe o 2º número:</label>
            <input id="num2" type="number" name="num2">
        <br>
            <label for="num3">Informe o 3º número:</label>
            <input id="num3" type="number" name="num3">
        <br>
        <br>
        <button type='submit' id="botao">Resultado</button>
        <br>
        <?php
            $n1 =  isset($_POST['num1']) ? $_POST['num1'] : 0;
            $n2 =  isset($_POST['num2']) ? $_POST['num2'] : 0;
            $n3 =  isset($_POST['num3']) ? $_POST['num3'] : 0;

            $soma = $n1 + $n2 + $n3;
            
            function estiloResultado($n1, $n2, $n3, $soma) {
                if ($n1 > 10) {
                    return '<span style="color: blue;">Resultado: '.$soma.'</span>';
                } else if ($n2 < $n3) {
                    return '<span style="color: green;">Resultado: '.$soma.'</span>';
                } else if (($n3 < $n1) && ($n3 < $n2)) {
                    return '<span style="color: red;">Resultado: '.$soma.'</span>';
                } else {
                    return 'Resultado: '.$soma;
                }
            }
            echo "<h3>".estiloResultado($n1, $n2, $n3, $soma)."</h3>";
        ?>
    </body>
</html>