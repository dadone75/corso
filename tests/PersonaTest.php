<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Davide\Corso\Extras\Persona;


//final classe immutabile come la static. senza costruttore
final class PersonaTest extends TestCase{

    public function testGetEta(){

        $persona=new Persona(48,"M",85,187);
        
        $this->assertEquals(48,$persona->getEta());
        
    }

    public function testGetMaggiorenne(){

        $persona=new Persona(17,"M",85,187);
        $this->assertEquals(false,$persona->getMaggiorenne());
        $persona=new Persona(18,"M",85,187);
        $this->assertEquals(true,$persona->getMaggiorenne());
        
    }

}


?>