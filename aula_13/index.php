<?php
    require_once "01_pessoa.php";

    $pessoa = new Pessoa();
    $pessoa->setNome("Julia");
    $pessoa->setSobreNome("Fitzlaff");

    echo $pessoa->getNomeCompleto();

    /*echo retornaNomeCompletoPessoa("Julia", "Fitzlaff");*/
?> 
