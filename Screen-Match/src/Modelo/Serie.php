<?php

class Serie extends Titulo{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
       public readonly int $temporada,
       public readonly int $episodiosPorTemp,
       public readonly int $minutosPorEpisodio,
       
    ){
        #parent permite nos acessar metodos da clase pai
        parent::__construct($nome, $anoLancamento, $genero);
    }
    public function duracaoEmMinutos():int{
        return $this->temporada * $this->episodiosPorTemp * $this->minutosPorEpisodio;
    }

}