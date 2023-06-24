<?php

namespace Davide\Corso\Extras;
use Davide\Corso\Interface\PersonaInterface;

class Persona implements PersonaInterface{

    public int $eta;
    public string $sesso;
    public int $altezza;
    public int $peso;

    public function __construct(int $eta,string $sesso,int $peso,int $altezza){

        $this->eta=$eta;
        $this->sesso=$sesso;
        $this->peso=$peso;
        $this->altezza=$altezza;
//COSTANTE PER CALCOLARE MASSA CORPOREA
        define("NUMERO",703.2);

    }
    public function getEta():int{
    
        return $this->eta;

    }
    public function getSesso():string{

        return $this->sesso;
        
    }
    public function getBmi():float{

        return round($this->peso/$this->altezza*NUMERO);
        
    }
    public function getMaggiorenne():bool{

    //un latro modo di scrivere la if
    return $this->eta>=18?true:false;
    
    }

}


?>