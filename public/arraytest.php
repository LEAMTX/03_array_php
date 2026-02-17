<?php
//méthode 1
$fruits = array("pomme", "banane", "orange");

//méthode 2:
$fruits = ["pomme", "banane", "orange"];
$fruits[] = "orange"; //rajouter orange à la fin du tablezau automatiquement
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

// foreach ($tableau as $cle => $valeur) {
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


//pour afficher chaque clef valeur:
foreach ($fruits as $fruit) {
  echo $fruit . "<br>";
}

$listpersonnes = [
  [
    "prenom" => "Léa",
    "age" => 23
  ],
  [
    "prenom" => "Thomas",
    "age" => 35
  ],
  [
    "prenom" => "Marie",
    "age" => 28
  ]
];
echo $listpersonnes[0]["prenom"];
echo $listpersonnes[1]["age"];

foreach ($listpersonnes as $personne) {
  echo $personne["prenom"] . $personne["age"];
}
$fruits = ["pomme", "banane", "orange"];
print_r($fruits);
unset($fruits[0]); //supprimer pomme 
print_r($fruits);


//VERIFIER SI UN INDEX EXISTE 
if (isset($fruits[1])) {
  echo "<p>L'index 2 existe et contient : " . $fruits[1] . "</p>";
} else {
  echo "<p>L'index 2 existe pas  </p>";
}

if (isset($fruits[4])) {
  echo "<p>L'index 4 existe et contient : " . $fruits[4] . "</p>";
} else {
  echo "<p>L'index 4 existe pas  </p>";
}