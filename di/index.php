<?php
require_once "class.php";
require_once "tesla-robot.php";

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 1 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Utilizzando il concetto di Classe Astratta che abbiamo visto a lezione, 
 * realizzare concettualmente 1 classe astratta di tipo Categoria , 
 * con i relativi figli (ovvero che estendono Category):
 * 
 * categoria
 * 
 * --News
 * --Sport
 * --Gossip
 * --Storia
 * 
 * Tutte le classi avranno un metodo astratto chiamato: getMyCategory();
 * e salvare tutto in un file class.php
**/
echo "Vedi il codice presente nel file index.php \n";

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 2 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Importando la classe appena creata, realizzare un nuovo file index.php
 * in cui inserire un oggetto Post (definire la classe dentro index.php) 
 * con i seguenti attributi:
 * 
 * Post
 * --Titolo
 * --Categoria
 * --Tag
 * 
 * $newPost = new Post(?, ?, ?);
 * var_dump($newPost);
 * 
 * E iniettare la dipendenza Categoria all’interno dell’attributo Categoria.
 * 
**/

class Post
{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct(string $titolo, Categoria $categoria, $tag)
    {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }
}

class NewsReal extends News
{
    public function getMyCategory() {
        return "Sono una News \n";
    }
}

$newPost = new Post('Dependencing Injection', new NewsReal(), 'di');
print_r($newPost);

echo $newPost->categoria->getMyCategory();

echo "\n";
echo "# ############################################################################ \n";
echo "# ESERCIZIO 3 \n";
echo "# ############################################################################ \n";
echo "\n";
/**
 * Creare il proprio Robot Tesla, seguendo il modello visto a lezione
 * Mettere ogni classe (abstract o no) in un file, mettendo require nell'index.php
 * Creare un esercito random di Tesla Robot
**/

$robot = new TeslaRobot('Atlas-001', new Mano(), new Piede());

print_r($robot);