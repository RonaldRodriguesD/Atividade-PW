<?php
//EXERCÍCIO 1

$numeros = [65,37,58,95,29,14,36,05];
echo "EXERCÍCIO 1"."<br>";
echo "<br>";
echo "Total =".array_sum($numeros)."<br>";
echo "====================================="."<br>";

//EXERCÍCIO 2

echo "EXERCÍCIO 2"."<br>";
echo "<br>";
echo "Maior Valor =".max($numeros)."<br>";
echo "Menor Valor =".min($numeros)."<br>";
$tamanho = count($numeros);
$media = array_sum($numeros) / $tamanho;
echo "Média dos Valores =".$media;
echo "<br>";
echo "====================================="."<br>";
//EXERCÍCIO 3

echo "EXERCÍCIO 3"."<br>";
echo "<br>";

$funcionarios = [
    ['nome' => 'João da Silva', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6000],
    ['nome' => 'Maria da Silva', 'genero' => 'F', 'area' => 'marketing', 'salario' => 3000],
    ['nome' => 'Beltrano da Silva', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 4000],
    ['nome' => 'Ciclano Pereira', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 4000],
    ['nome' => 'Fulana Oliveira', 'genero' => 'F', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Jão Silveira', 'genero' => 'M', 'area' => 'marketing', 'salario' => 4000],
    ['nome' => 'Cirilo Ferreira', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 3000],
    ['nome' => 'Zé das Couve', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 5000],
    ['nome' => 'Pedro Pedrada', 'genero' => 'M', 'area' => 'contabilidade', 'salario' => 2000],
    ['nome' => 'Paulo Paulada', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Creuza Reis', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 1500],
    ['nome' => 'Yarley Ground', 'genero' => 'M', 'area' => 'financeiro', 'salario' => 3000],
    ['nome' => 'Billy Bill', 'genero' => 'M', 'area' => 'marketing', 'salario' => 2000],
    ['nome' => 'Brian Brioche', 'genero' => 'M', 'area' => 'engenharia', 'salario' => 6500],
    ['nome' => 'Mary Mariana', 'genero' => 'F', 'area' => 'financeiro', 'salario' => 2000],
];

//iten 1
$salarios = [];
foreach($funcionarios as $funcionario){
    foreach($funcionario as $i => $value){
        if ($i == 'salario'){
            array_push($salarios , $value);
        }
    }
}
echo "O maior salário é =".max($salarios);

//iten 2

$engenhariasal = [];
$marketingsal = [];
$contabilidadesal = [];
$financeirosal = [];
foreach($funcionarios as $funcionario){
    foreach($funcionario as $i => $value){
        switch($i){
            case 'engenharia';
                array_push($engenhairiasal , $value);
            case 'marketing';
                array_push($marketingsal , $value);
            case 'contabilidade';
                array_push($contabilidadesal , $value);
            case 'financeiro';
                array_push($financeirosal , $value);
            default:
                break;
        }
    }
}
