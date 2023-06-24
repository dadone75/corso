<?php

namespace Davide\Corso\Extras\Automobile;

use Davide\Corso\Extras\Automobile;

class FiatPunto extends Automobile{

    public function __construct(int $cavalli, int $lunghezza,int $larghezza,int $altezza,string $colore, ?array $optionals){

        parent::__construct("fiat","punto",5,$cavalli,$lunghezza,$larghezza,$altezza,$colore,$optionals);


    }

    
}

?>