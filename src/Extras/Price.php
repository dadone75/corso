<?php

namespace Davide\Corso\Extras;

use Davide\Corso\Interface\PriceInterface;

class Price{

    public PriceInterface $object;
    public function __construct(PriceInterface $object){

            $this->object=$object;

    }


    public function getLastPrice():float{

        return $this->object::getPrice();

    }
}

?>