<?php
    function metroQuadrado(int $lado1 = 1, int $lado2 = 1) {
        return $lado1 * $lado2;
    
    }
    function exibeMensagem($mensagem) {
        echo $mensagem;
    
    }
    exibeMensagem("Total M2: " . metroQuadrado(10,10));
?>