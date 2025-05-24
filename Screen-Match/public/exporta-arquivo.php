<?php 

$filme = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'genero' => $_POST['genero'],
];

file_put_contents('filme.json', json_encode(($filme)));
header('Location: /sucess.php?filme='. $filme['nome']);