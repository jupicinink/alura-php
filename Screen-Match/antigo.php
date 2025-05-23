<?php

require __DIR__ . "src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nome = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

if ($quantidadeDeNotas > 0) {
    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
} else {
    $notaFilme = "Sem notas";
}
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nome . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nome) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criarFilme( 
    "Thor: Ragnarok", 
    2021,
    7.8,
    "super-herói"
);

echo $filme["ano"];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = null;

if (!empty($notas)) {
    $menorNota = min($notas);
    var_dump($menorNota);
} else {
    echo "Não há notas cadastradas para calcular a menor nota.\n";
    var_dump($menorNota);
}
var_dump($menorNota);

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));


var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}') );

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
