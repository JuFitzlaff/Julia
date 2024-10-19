<?php

    require_once "model\\pessoa.php";
    require_once "model\\contato.php";
    require_once "model\\endereco.php";

    $pessoa = new \app\model\Pessoa;
    $pessoa->setNome("Cleber");
    $pessoa->setSobreNome("Nardelli");
    $pessoa->setDataNascimento(new DateTime("1981-11-01"));
    $pessoa->setCpfCnpj("000.000.000-00");

    //Definindo os dados de contato
    $pessoa->getTelefone()->setTipo(1);
    $pessoa->getTelefone()->setNome("Telefone Celular");
    $pessoa->getTelefone()->setValor("47 989888899");

    //Definindo os dados de endereço
    $pessoa->getEndereco()->setLogradouro("Rua Xv de Novembro");
    $pessoa->getEndereco()->setBairro("Centro");

    echo $pessoa->getNomeCompleto() . "<br>";
    echo $pessoa->getIdade();

    echo $pessoa;

    //echo retornaNomeCompletoPessoa("Cleber", "Nardelli");

?>