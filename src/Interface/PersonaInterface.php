<?php

namespace Davide\Corso\Interface;

/**
 * @property int $eta
 * @property string $sesso
 * @property int $peso
 * @property int $altezza
 */

interface PersonaInterface{

    public function __construct(int $eta,string $sesso,int $peso,int $altezza);
    public function getEta():int;
    public function getSesso():string;
    public function getBmi():float;
    public function getMaggiorenne():bool;

}

?>