<!DOCTYPE html>
<!--10. Dado o Array abaixo, pede-se para recursivamente criar a árvore:

$pastas = array(
            "bsn" => array(
                "3a Fase" => array("desenvWeb","bancoDados 1", "engSoft 1"),
                "4a Fase" => array("Intro Web","bancoDados 2", "engSoft 2")));

Resultado da árvore:
-bsn
--3ª Fase
---desenvWeb
---bancoDados 1
---engSoft 1
--4ª Fase
---Intro Web
---bancoDados 2
---engSoft 2-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercício 10</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Árvore Recursiva</h1>

        <?php
            $pastas = array(
                "BSN" => array(
                    "3ª Fase" => array("Desenvolvimento Web", "Banco de Dados I", "Engenharia de Software I"),
                    "4ª Fase" => array("Introdução Web", "Banco de Dados II", "Engenharia de Software II")));

            function imprimeArvore($pasta, $nivel = 1) {
                foreach ($pasta as $chave => $valor) {
            
                if (is_array($pasta[$chave])) {
                    echo str_repeat("-", $nivel)." ".$chave."<br>";
                    imprimeArvore($pasta[$chave], $nivel + 1);
                } else {
                    echo str_repeat("-", $nivel)." ".$valor."<br>";
                }
            }
        }
        imprimeArvore($pastas);
        ?>
    </body>
</html>