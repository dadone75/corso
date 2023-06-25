<?Php


namespace Davide\Corso\Extras;
use Davide\Corso\Interface\PriceInterface;


class Binance implements PriceInterface{

    private static string $endpoint="https://data.binance.com/api/v3/ticker/24hr";
    

public static function make():self{
//ritorna se stessa
//se non era statica potevo scrivere $this
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

        $price=array_filter($obj,function($symbol){
//restituisce la riga con il symbol che cerco. in questo caso il valore del bitcoin
            return $symbol["symbol"]=="BTCUSDT";
            
            });
       
// var_dump(array_values($price)[0]["lastPrice"]);
//riporto l'array rimettendo gli indici da 0. il filtro di prima mi passa l'indice che trova nel jason.con array values
//prendo la choiava lastPrice dell'array associativo.
//converto a float per passare da stringa a numero Decimal

        return (float)array_values($price)[0]["lastPrice"];

    }

}


/*https://api.coinlore.net/api/tickers/
symbol	"BTC"
price_usd
Coinlore.php
*/