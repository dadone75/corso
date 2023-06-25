<?php
use Davide\Corso\Extras\Binance;

//definizione di costanti
define('BASE_DIR', __DIR__);
//posso richiamarla senza $ come le altre variabili
require BASE_DIR.'/vendor/autoload.php';

use Davide\Corso\Extras\Automobile;
use Davide\Corso\Extras\Automobile\FiatPunto;

$automobile=new Automobile("opel","zafira",1000,7,4,3,2,"red",null);

echo "Volume: {$automobile->getVolume()}";

$fiat_punto=new FiatPunto(75,230,180,190,"red",null);

echo "<br>Volume Punto: {$fiat_punto->getVolume()}<br>";

echo Binance::getPrice();

?>