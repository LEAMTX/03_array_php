<?php
//méthode 1
$fruits = array("pomme", "banane", "orange");

//méthode 2:
$fruits = ["pomme", "banane", "orange"];

echo $fruits[0];

//tableau clef valeur prénom clef valeur Léa
$personne = [
  "prenom" => "Léa",
  "nom" => "Martin",
  "age" => 23
];
$person2 = [
  "prenom" => "bob",
  "nom" => "Martin",
  "age" => 26
];

//LISTE DE TABLEAUX 
$lot = [
  $personne,
  $person2
];

//faire une classe personne avcec des paramètres, crée une instance de cette classe object, manipuler un objkect pour lui assigner des nouvelles valeurs 

echo "<pre>";
print_r($lot);
echo "</pre>";

foreach ($lot as $personne) {
  echo $personne["prenom"] . "\n";
  echo $personne["nom"] . "\n";
  echo $personne["age"] . "\n";
}

class Personne
{
  public $prenom;
  public $nom;
  public $age;

  //constructeur on passe des paramètres 
  public function __construct($prenom, $nom, $age)
  {



    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->age = $age;




  }
}
$personne1 = new Personne("Léa", "Martin", "23");

echo $personne1->prenom;
echo $personne1->nom;
echo $personne1->age;






