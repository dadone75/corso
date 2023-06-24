<?php

namespace Davide\Corso\Extras;

class Automobile{

    public string $colore;
    public string $marca;
    public string $modello;
    public int $cavalli;
    public int $posti;
    public int $lunghezza;
    public int $larghezza;
    public int $altezza;
    

    //il ? è perchè potrebbe essere vuoto
    //i parametri opzionali visto che possono NON essere passati vanno messi per ultimi
    public ?array $optionals;

//x il default della variabile guarda colore
public function __construct(string $marca,string $modello,int $cavalli, int $posti, int $lunghezza,int $larghezza,int $altezza,string $colore, ?array $optionals){

    $this->colore=$colore;
    $this->marca=$marca;
    $this->modello=$modello;
    $this->cavalli=$cavalli;
    $this->posti=$posti;
    $this->lunghezza=$lunghezza;
    $this->larghezza=$larghezza;
    $this->altezza=$altezza;
    $this->optionals=$optionals;

}

public function getVolume():int{

    return $this->larghezza*$this->lunghezza*$this->altezza;

}

}



?>