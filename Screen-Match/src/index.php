<?php
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";


echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
'Thor - Ragnarok',
 2021,
Genero::SuperHeroi,
189,
);


$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento();
