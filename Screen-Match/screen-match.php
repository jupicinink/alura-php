<?php
require __DIR__ . "/funcoes.php";

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



// essa expressao casa ou junta || 
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor Ragnarok" => "super-heroi",
    "Se beber não case" => "comedia",
    default => "genenro desconhecido",
};




