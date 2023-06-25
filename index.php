<?php
use Davide\Corso\Extras\Price;

//definizione di costanti
define('BASE_DIR', __DIR__);
//posso richiamarla senza $ come le altre variabili
require BASE_DIR.'/vendor/autoload.php';

use Davide\Corso\Extras\Binance;
use Davide\Corso\Extras\Coinlore;
use Davide\Corso\Extras\Automobile;
use Davide\Corso\Extras\Automobile\FiatPunto;

$automobile=new Automobile("opel","zafira",1000,7,4,3,2,"red",null);

echo "Volume: {$automobile->getVolume()}";

$fiat_punto=new FiatPunto(75,230,180,190,"red",null);

echo "<br>Volume Punto: {$fiat_punto->getVolume()}<br>";

//echo Binance::getPrice()."<br>";
//echo Coinlore::getPrice();

$newPrice= new Price(Coinlore::make());
echo $newPrice->getLastPrice();

echo"<br><br>";

echo 5%2;
echo fmod(5,2);

if(1==1 xor 1==2){
    echo "ok";
}
if(1==1 xor 2==2){
    echo "no";
}
echo"<br><hr><br>";
var_dump(1=="1");
var_dump(1==="1");
var_dump(0==false);
var_dump(0===false);



?>