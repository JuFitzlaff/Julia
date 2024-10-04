<?php
    $carros = array("Volvo", "BMW", "Toyoto");
    echo "Eu gosto de ".$carros[0].", ".$carros[1]." e ".$carros[2].".";

    echo "<br>";

    $idade = array("João"=>"35", "Maria"=>"37", "José"=>"43");

    foreach($idade as $chave => $valor) {
        echo "Chave=".$chave.", Valor=".$valor;
        echo "<br>";
    }

    echo "<br>";

    $disciplina = array("Banco de Dados II", "Estrutura de Dados II", "Adm. Sistemas de Informação", "Eng. Software II", "Programação Web I");
    $professores = array("Marco", "Bastos", "Sandro", "Jullian", "Cléber");

    for($i = 0; $i < 5; $i++) {
       echo "Disciplina ".$disciplina[$i].", Professor ".$professores[$i]."<br>";
    }
?>
