<?php
    //Prática 04
    $salario1 = 1000;
    $salario2 = 1000;

    $salario2 = $salario1;
    $salario2 += 1;
    $salario1 *= 1.1;

    echo 'Valor Salário1: '.$salario1.' Valor Salário2: '.$salario2.'<br>';

    if ($salario1 > $salario2){
        echo 'O valor de Salário1 é maior que o Salário2';
    } else if ($salario2 > $salario1) {
        echo 'O valor de Salário2 é maior que o Salário1';
    } else {
        echo 'O valores são iguais';
    }

    echo '<br>';

    for ($i = 1; $i <= 100; $i++) {
        $salario1 += 1;

        if($i == 50){
            break;
        }
    }
    echo 'Salário1: '.$salario1;
?>
