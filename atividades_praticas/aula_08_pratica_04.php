<!--Utilizando o mesmo programa adaptado na Prática 3, fazer:
- Criar um laço de repetição para ser executado 100 vezes.
- A cada iteração deve-se incrementar 1 na variável SALARIO1.
- Dentro do laço adicionar uma condição (IF) e quando a iteração for a 50, deve-se PARAR a execução.
- Ao final, fora do loop, escrever o valor de SALARIO1, caso ele seja menor do que SALARIO2;-->
<?php

$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
$salario2 += 1;
$salario1 += $salario1  * 0.10;

echo "Valor salário 1: ".$salario1."<br>"."Valor salário 2: ".$salario2."<br>";
echo "<br>";

if ($salario1 > $salario2) {
    echo "O valor da variável 1 é maior que o valor da variável 2";
} elseif ($salario1 < $salario2) {
    echo "O valor da variável 2 é maior que o valor da variável 2";
} else {
    echo "Os valores são iguais";
}

echo "<br>";

for ($i = 0; $i <= 100; $i++) {
    if ($i == 50) {
        break;
    } else {
        $salario1 += 1;
    }
}

echo "<br>";

if ($salario1 < $salario2) {
    echo "O valor do salário 1 é menor que o salário 2"."<br>";
    echo "Salário 1 = ".$salario1;
} else {
    echo "Salário 1 = ".$salario1."<br>";
    echo "Salário 2 = ".$salario2;
}
?>