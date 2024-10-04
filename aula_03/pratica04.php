<?php

    function getValor() {
        return $_REQUEST['valor'];
    }

    function getDesconto() {
        return $_REQUEST['desconto'];
    }
   
    function calculaValorFinal() {

        return getValor() - getDesconto();
    }

    function exibeMensagem($mensagem) {
        echo $mensagem;
    }

    exibeMensagem("Valor Final: ".calculaValorFinal());
?>