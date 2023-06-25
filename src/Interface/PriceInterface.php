<?Php


namespace Davide\Corso\Interface;

/**
* @property string $endpoint
 */
interface PriceInterface{


    public static function getPrice():float;

    //metodo che restituisce se stesso
    //il tipo di dato del return è la classe stessa
    public static function make():self;

}




?>