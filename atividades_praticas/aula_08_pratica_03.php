<!--Utilizando o mesmo programa criado na Prática 2,
fazer:
- Se o valor da variável SALARIO1 for MAIOR que o valor da variável SALARIO2, então escrever:
“O Valor da variável 1 é maior que o valor da variável 2”
- Caso contrário e o valor da variável SALARIO1 for MENOR que o valor da variável SALARIO2, então escrever, conforme.
- Caso contrário, escrever: “Os valores são iguais”.-->
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
?> 