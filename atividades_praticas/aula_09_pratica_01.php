<!--Utilizando functions, implementar um programa PHP para:
- Declarar array com notas (quantas vc quiser);
- Declarar array com faltas (cada posição é um dia)
- Criar functions para:
- Calcular e retornar a média das notas;
- Verificar e retornar o status da aprovação por nota Aprovado, caso a média seja maior do 7;
- Calcular e retornar a frequência do aluno;
- Verificar e retornar o status da aprovação por frequência Aprovado caso > 70%;
- Fazer as chamadas para as funcs e exibir;-->
<?php 

define("notas", array(8, 7.5, 9, 6.5, 8));
define("aulas", array(1, 0, 1, 0, 1));
    
function calculaMediaNotas() {
    $somaNotas = 0;
    for($i = 0; $i < count(notas); $i++) {
        $somaNotas += notas[$i];
    }
        $mediaNotas = $somaNotas / count(notas);
        return $mediaNotas;
}

function verificaStatusNotas($mediaNotas) {
    if($mediaNotas >= 7) {
        return "Aprovado";
    }
        return "Reprovado";
}

function calculaFrequencia() {
    $somaFrequencia = 0;
    for($i = 0; $i < count(aulas); $i++) {
        $somaFrequencia += aulas[$i];
    }
        $frequencia = 100 - (($somaFrequencia * 100) / $i);
        return $frequencia;
}

function verificaStatusFrequencia($frequencia){
    if($frequencia >= 70) {
        return "Aprovado";
    }
        return "Reprovado";
}

function exibeMensagem($mensagem) {
    echo $mensagem;
}

$mediaNotas = calculaMediaNotas();
$frequencia = calculaFrequencia();

exibeMensagem("Média das Notas: ".$mediaNotas."<br>".
              "Status por Nota: ".verificaStatusNotas($mediaNotas)."<br>". 
              "Frequência: ".$frequencia."%"."<br>".
              "Status por Frequência: ".verificaStatusFrequencia($frequencia)."<br>");
?>