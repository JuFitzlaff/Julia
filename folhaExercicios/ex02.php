<!DOCTYPE html>
<!--2. Crie um programa para testar se um número é divisível por 2.
Caso for verdade escrever a frase “Valor divisível por 2”;
Caso for falso escrever a frase “O valor não é divisível por 2”-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 02</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Divisível por 2</h1>

        <form method="POST">
            <label for="num">Informe um número:</label>
            <input id="num" type="number" name="num">
        <br>
        <br>
        <button type='submit' id="botao">Resultado</button>
        <br>
        <?php
            $n =  isset($_POST['num']) ? $_POST['num'] : 0;

            function divisivelPorDois($n)  {
                if ($n % 2 == 0) {
                    return 'O valor '.$n.' é divisível por 2';
                } else {
                    return 'O valor '.$n.' não é divisível por 2';
                }
            }
            echo "<h3>".divisivelPorDois($n)."</h3>";
        ?>
    </body>
</html>