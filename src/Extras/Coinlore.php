<?Php

namespace Davide\Corso\Extras;

use Davide\Corso\Interface\PriceInterface;

class Coinlore implements PriceInterface{

    private static string $endpoint="https://api.coinlore.net/api/tickers";
    
    public static function make():self{

        return new self();
    
    }
    
//uso il metodo statico e quindi non uso il costruttore
//il self è come il this ma si usa per i metodi statici

    public static function getPrice():float{
//accedo all'url e ottengo i dati
//richiesta http get

    $json = file_get_contents(self::$endpoint);
//decodifica il jason come array
//mettendo true lo decodifica come array altrimenti lo decodifica comne oggetto
        
        $obj = json_decode($json,true);

        
        //filtro l'array passando il filtro che sto cercando

        $price=array_filter($obj["data"],function($symbol){
//restituisce la riga con il symbol che cerco. in questo caso il valore del bitcoin
            return $symbol["symbol"]=="BTC";
            
            });
       
// var_dump(array_values($price)[0]["lastPrice"]);
//riporto l'array rimettendo gli indici da 0. il filtro di prima mi passa l'indice che trova nel jason.con array values
//prendo la choiava lastPrice dell'array associativo.
//converto a float per passare da stringa a numero Decimal

        return (float)array_values($price)[0]["price_usd"];

    }

}