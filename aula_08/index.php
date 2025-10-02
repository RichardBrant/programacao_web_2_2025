<?php
echo 'Prática 1';
echo '<br>';
echo '<br>';
// Pratica 1
//Function
function echoVars(string $var1, string $var2){
    echo $var1 . " " . $var2;  
}
// Programa principal

$var1 = "Richard";
$var2 = "Brant";

echoVars($var1, $var2);

echo '<br>';
echo '<br>';
echo '<br>';

echo 'Prática 2';
echo '<br>';
echo '<br>';
// Pratica 2
// Criar um programa em PHP para:
// Declarar duas variáveis com os nomes: SALARIO1 e
// SALARIO2;
// Atribuir 1000 para a variável SALARIO1;
// Atribuir 2000 para a variável SALARIO2;
// Atribuir o valor da variável SALARIO1 para SALARIO2
// Incrementar 1 na variável SALARIO2;
// Adicionar 10% de aumento para SALARIO1;
// Produzir uma saída com o texto: “Valor Salário 1: XX e Valor
// Salário: XX”;

$iSalario1 = 1000;
$iSalario2 = 2000;

$iSalario2 = $iSalario1;
$iSalario2++;
$iSalario1 *= 1.1;

echo "Valor Salário 1: $iSalario1 e Valor Salário 2: $iSalario2";

echo '<br>';
echo '<br>';
echo '<br>';

echo 'Prática 3';
echo '<br>';
echo '<br>';

// Utilizando o mesmo programa criado na Prática 2,
// fazer:
// Se o valor da variável SALARIO1 for MAIOR que o valor da
// variável SALARIO2, então escrever:
// “O Valor da variável 1 é maior que o valor da variável 2”
// Caso contrário e o valor da variável SALARIO1 for MENOR
// que o valor da variável SALARIO2, então escrever, conforme.
// Caso contrário, escrever: “Os valores são iguais”.


if($iSalario1 > $iSalario2){
    echo "O Valor da variável 1 é maior que o valor da variável 2";
    } elseif ($iSalario1 < $iSalario2) {
        echo "O Valor da variável 1 é menor que o valor da variável 2";
    } else {
        echo "Os valores são iguais";
}

echo '<br>';
echo '<br>';
echo '<br>';

echo 'Prática 4';
echo '<br>';
echo '<br>';

$i = 0;
$iSalario1 = 0;

echo 'Antes do loop a variável é igual à ' . $iSalario1;

echo '<br>';
for($i=0; $i <= 100; $i++){
    if ($i==50){
        break;
    } else {
        $iSalario1++;
    }
};

if($iSalario1 > $iSalario2){
    echo $iSalario1 . '<br>';
} else {
    echo $iSalario2 . '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

echo 'Prática 5';
echo '<br>';
echo '<br>';

/*Criar um programa PHP para:
Declarar um ARRAY que contenha os nomes das disciplinas
que vocês estão matriculados de segunda a sexta-feira.
Criar outro ARRAY que contenha os nomes dos professores
dessas disciplinas.
Fazer um LOOP for, que faça 5 iterações, e escreva o seguinte:
“Disciplina DDD, professor PPP.”*/

$aDisciplinas = array ('Estrutura de Dados II', 'Engenharia de Software II', 'Administração e Sistemas de Informação', 'Programação Web I', 'Arquitetura de Computadores II');
$aProfessores = array ('Bastos', 'Jullian', 'Marciel', 'Cleber', 'Ademar');

for ($i=0;$i<count($aDisciplinas);$i++) {
    echo 'Disciplina: ' . $aDisciplinas[$i] . ', Professor: ' . $aProfessores[$i] . '<br>';
};

echo '<br>';
echo '<br>';
echo '<br>';

echo 'Prática 6';
echo '<br>';
echo '<br>';

$aBoletim = array(
    array("Disciplina"=>"Matemática","Faltas"=>5, "Média"=>8.5),
    array("Disciplina"=>"Português","Faltas"=>2, "Média"=>9),
    array("Disciplina"=>"Geografia","Faltas"=>10, "Média"=>6),
    array("Disciplina"=>"Educação","Faltas"=>2, "Média"=>8)
);
echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr>
        <th>Disciplina</th>
        <th>Faltas</th>
        <th>Média</th>
      </tr>';

foreach($aBoletim as $b){
    echo '<tr>';
    echo '<td>' . $b["Disciplina"] . '</td>';
    echo '<td>' . $b["Faltas"] . '</td>';
    echo '<td>' . $b["Média"] . '</td>';
    echo '</tr>';
}

echo '</table>';







?>