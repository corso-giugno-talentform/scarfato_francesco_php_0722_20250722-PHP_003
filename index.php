<?php

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 1 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * ESERCIZIO 1
 * Utilizzando i principi di OOP e di Ereditarietà, creare una struttura a classi come segue:
 * 
 * +-|Continent 
 * +-----------|Country 
 * +--------------------|Region 
 * +---------------------------|Province 
 * +------------------------------------|City
 * +------------------------------------------|Street
 * Continent genitore con figlio Country, con a sua volta un figlio Region, con a sua volta un figlio Province, con a sua volta un figlio City e infine un figlio Street:
 * 
 * Ogni classe avrà un attributo public del tipo:
 * 
 * $nameContinent: 
 * $nameCountry; 
 * $nameRegion: 
 * $nameProvince: 
 * $nameCity:
 * $nameStreet:
 * 
 * La prima classe Genitore sarà strutturata come segue:
 * 
 * 
 * class Continent
 * {
 *   public $nameContinent;
 *   public function __construct($continent)
 *   {
 *     $this->nameContinent = $continent;
 *   }
 * }
 * 
 * Voglio istanziare un nuovo oggetto chiamato $myLocation, subito dopo richiamare un metodo pubblico getMyCurrentLocation() che mi stampi a video :
 * 
 * "Mi trovo in Europa, Italia, Puglia, Ba, Monopoli, Via Roma"
**/

class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }
}

class Location extends Street
{
    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city, $street);
    }

    public function getMyCurrentLocation()
    {
        echo "Mi trovo in "
            . $this->nameContinent
            . ", "
            . $this->nameCountry
            . ", "
            . $this->nameRegion
            . ", "
            . $this->nameProvince
            . ", "
            . $this->nameCity
            . ", "
            . $this->nameStreet
            . "\n"
        ;
    }
}

$myLocation = new Location('Europa', 'Italia', 'Emilia Romagna', 'FE', 'Terre del Reno', 'via Roma, 666');
$myLocation->getMyCurrentLocation();


echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 2 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Dato questo semplice schema di classificazione Animale:
 * 
 * <a target="_blank" rel="noopener noreferrer" href="/corso-giugno-talentform/php-oop-5-mansi/blob/main/images/esercizio2.jpg"><img src="/corso-giugno-talentform/php-oop-5-mansi/raw/main/images/esercizio2.jpg" alt="esercizio2.jpg" style="max-width: 100%;"></a>
 * 
 * Creare una struttura a Classi sfruttando l’ereditarietà e seguendo queste semplici regole:
 * 
 * 1) Le classi NON devono avere attributi;
 * 
 * 2) Ogni classe avrà un metodo specifico PROTECTED per stampare la sua specializzazione (Attenti all’overwrite);
 * 
 * Non Potete realizzare metodi definiti dall’utente PUBLIC per stampare il risultato, l’unico metodo PUBLIC ammesso è il Costruttore;
 * 
 * Esempio di Output:
 * 
 * $magikarp = new Fish();
 * 
 * Nel terminale visaulizzerete:
 * 
 * Sono un animale Vertebrato
 * Sono un animale a Sangue Freddo
 * Splash!
 * 
 * ---------------------
 * 
 * $serpente = new Reptile();
 * 
 * Nel terminale visaulizzerete:
 * 
 * Sono un animale Vertebrato
 * Sono un animale a Sangue Freddo
 * Sono un Serepnte
**/

class Vertebrates
{
    protected function iAm()
    {
        return "Sono un Vertebrato";
    }
}

class WarmBlooded extends Vertebrates
{
    protected function iAm()
    {
        return parent::iAm() .  " -> Sangue Caldo";
    }
}

class Mammal extends WarmBlooded
{
    protected function iAm()
    {
        return parent::iAm() .  " -> Sono un Mammifero";
    }
}

class Bird extends WarmBlooded
{
    protected function iAm()
    {
        return parent::iAm() .  " -> Sono un Uccello";
    }
}

class Coldlooded extends Vertebrates
{
    protected function iAm()
    {
        return parent::iAm() . " -> Sono a Sangue Freddo";
    }
}

class Repitile extends Coldlooded
{
    protected function iAm()
    {
        return parent::iAm() .  " -> Sono un Rettile";
    }
}

class Amphibian extends Coldlooded
{
    protected function iAm()
    {
        return parent::iAm() .  " -> Sono un Anfibio";
    }
}


class Fish extends Coldlooded
{
    public function __construct()
    {
        echo parent::iAm() . " -> Sono un Pesce \n";
    }
}

class Frog extends Amphibian
{
    public function __construct()
    {
        echo parent::iAm() . " -> Sono una rana \n";
    }
}

class Leon extends Mammal
{
    public function __construct()
    {
        echo parent::iAm() . " -> Sono un Leon \n";
    }
}

$magikarp = new Fish();
$leon = new Leon();
$frog = new Frog();

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 3 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Dato questo codice:
 * 
 * class Car {
 *   private $num_telaio; 
 * }
 * 
 * class Fiat extends Car {
 *  protected $license;
 *  protected $color; 
 *   
 * }
 * 
 * Completare la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritenete più opportuno, estendere i metodi **** per stampare a video in un echo:
 * 
 * "La mia macchina è Opel con targa AGHTYU e numero di Telaio "
 * 
 * 
 * Per sapere se l’esercizio è corretto, stampare in console il var_dump dell’oggetto:
 * 
 * var_dump($car);
 * L’output dovrà avere solamente 3 attributi:
 * 
 *  object(MyCar)#1 (3) {
 *   ["num_telaio":"Car":private]=>
 *   string(6) "183784"
 *   ["nome":protected]=>
 *   string(4) "Opel"
 *   ["targa":protected]=>
 *   string(8) "19384785"
 * }
 * 
 * E non 4! Dobbiamo modificare l’attributo privato, non crearne uno nuovo.
 * 
 *  object(MyCar)#1 (4) {
 *   ["num_telaio":"Car":private]=>
 *   NULL
 *   ["nome":protected]=>
 *   string(4) "Opel"
 *   ["targa":protected]=>
 *   string(8) "19384785"
 *   ["num_telaio":protected]=>
 *   string(6) "183784"
 * }
**/

class Car
{
    private $num_telaio;

    public function __construct($telaio)
    {
        $this->num_telaio = $telaio;
    }

    public function getNumTelaio()
    {
        return $this->num_telaio;
    }

    public function setNumTelaio($number)
    {
        $this->num_telaio = $number;
    }
}

class Fiat extends Car {
    protected $modello;
    protected $targa;

    public function __construct($modello, $targa, $telaio)
    {
        parent::__construct($telaio);
        $this->modello = $modello;
        $this->targa = $targa;
    }
}

$fiat = new Fiat('Panda', 'AA666BBB', 'telaio-123');
$fiat->setNumTelaio('Panda-6666');
echo "Telaio " . $fiat->getNumTelaio() . "\n";

print_r($fiat);


echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 4 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Crea un Trait "Calculator" definendo queste semplici  operazioni tra numeri.
 * 
 * Ricorda che i Trait sono "Universali" e non necessitano di essere istanziati.
 * 
 * trait Calculator {
 *   public function sum($a, $b) {
 *     return $a + $b;
 *   }
 * 
 *   public function sub($a, $b) {
 *     return $a - $b;
 *   }
 * 
 *   public function mul($a, $b) {
 *     return $a * $b;
 *   }
 * 
 *   public function div($a, $b) {
 *     return $a / $b;
 *   }  
 * 
 *   public function sqr($a){
 *    return sqrt($numero);
 *   }
 * }
 * 
 * Successivamente, crea 1 classe Rettangolo con gli attributi in input:
 * 
 * Base (b);
 * Altezza (h);
 * Il vostro compito sarà quello di creare 3 metodi (pubblici, protetti, statici vedete voi) che andranno a calcolare:
 * 
 * Area => b*h
 * Perimetro => 2b + 2h
 * Diagonale => √(h² + b²).
 * 
 * Tutte le operazioni che andrete a fare dovranno essere richiamate dal trait sopra definito.
 * 
**/

trait Calculator {
    public function sum($a, $b) { return $a + $b; }
    public function sub($a, $b) { return $a - $b; }
    public function mul($a, $b) { return $a * $b; }
    public function div($a, $b) { return $a / $b; }  
    public function sqr($a) { return sqrt($a); }
}

class Rectangle
{
    use Calculator;

    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calcArea()
    {
        // => b*h
        return $this->mul($this->width, $this->height);
    }

    public function calcPerimetro()
    {
        // => 2b + 2h
        return $this->sum($this->width, $this->height) * 2;
    }

    public function calcDiagonale()
    {
        //  => √(h² + b²).
        return $this->sqr(
            $this->sum(
                pow($this->width, 2),
                pow($this->height, 2)
            )
        );

    }
}

$rectangle = new Rectangle(2, 6);
print_r($rectangle);

echo "Aria " . $rectangle->calcArea() . "\n";
echo "Perimetro " . $rectangle->calcPerimetro() . "\n";
echo "Diagonale " . $rectangle->calcDiagonale() . "\n";