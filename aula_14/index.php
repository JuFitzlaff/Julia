<?php
/*
    -------Calculadora-------------------------------------------------
    require_once "calculadora.php";

    $calculadora = new Calculadora();
    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    $calculadora->somar();

    echo $calculadora->somar();

    -------Computador--------------------------------------------------
    require_once "computador.php";

    $computador = new Computador();
    $computador->ligar();
    $computador->desligar();
    
    echo $computador->getStatus();

    -------Jogador-----------------------------------------------------
    require_once "time.php";
    require_once "jogador.php";
    
    $time = new Time();

    $time->setNome("Unidavi FC");
    $time->setAnoFundacao(2000);

    $jogador = new Jogador();
    $jogador->setNome("Pelé");
    $jogador->setPosicao("M");
    $jogador->setDataNascimento(new DateTime("2000-01-01"));

    $time->addJogador($jogador);

    echo $time->getNome() . "<br>";
    var_dump($time->getJogadores());
*/ 
    require "time.php";
    require "jogador.php";
    //Instanciar um time;
    $time = new Time();
    //Definir os dados desse time;
    $time->setNome("Unidavi FC");
    $time->setAnoFundacao(2000);
    //Instanciar um Jogador

    for($i=0; $i < 11; $i++) {
        $jogador = new Jogador();
        $jogador->setNome("Pelé ".$i);
        $jogador->setPosicao("M-".$i);
        $jogador->setDataNascimento(new DateTime("2000-01-01"));
        //Adicionar esse jogador ao time;
        $time->addJogador($jogador);    
    }
    echo $time->getNome() . "<br>";
    var_dump($time->getJogadores());

    /*require_once "computador.php";
    $computador = new Computador();

    $computador->ligar();
    $computador->desligar();
    echo $computador->getStatus();*/


    /*require_once "calculadora.php";

    $calculadora = new Calculadora();
    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    
    echo $calculadora->somar();*/
?>