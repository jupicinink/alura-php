<?php

class Filme extends Titulo {
    public function __construct(
        string $nome,
       int $anoLancamento,
        Genero $genero,
       public readonly int $duracaoEmMinuto,
    ){
        #parent permite nos acessar metodos da clase pai
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoEmMinutos():int{
        return $this->duracaoEmMinuto;
    }


}
