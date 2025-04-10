<?php

echo "Bem vindo(a) ap screen match\n";


// como cirar variavel
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor Ragnarok";
$nomeFilme = "Se beber não case";
// variavel para entrada de dados pelo terminal  ?? se o argv[1] for nulo vai pegar por padrao o que estiver depois do ?? 
$anoLancametno = $argv[1] ?? 2022;

$notas = [];
for($i =1; $i < $argc; $i++){
    $notas[] += (float) $argc[$i];
};


// a expressão argc contem o numero de parametros passdados na linha de comando
$notaFilme = array_sum($notas) / ($argc - 1);

$planoPrime = True;
$incluidoNoPlano = $planoPrime || $anoLançametno < 2020 ; 


// operador de contatenador .
echo "nome filme: " . $nomeFilme . "\n";
echo "nome filme:  $nomeFilme \n";
echo "ano filme:  $anoLancametno \n";


if ($anoLancametno > 2022){
    echo "Esse filme é um lançamento\n";
} elseif ($anoLancametno  > 2020 && $anoLancametno <= 2022){
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
};

// essa expressao casa ou junta || 
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor Ragnarok" => "super-heroi",
    "Se beber não case" => "comedia",
    default => "genenro desconhecido",
};

// criar um array 
$filme = [
    "nome" => "Top Gun - Maverick", 
    "ano" => 2021,
    "nota" => 7.1,
    "genero" => "super-heroi",
];



