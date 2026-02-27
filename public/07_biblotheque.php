<!-- Crée un fichier public/bibliotheque.php
Crée une classe Livre avec les propriétés : titre , auteur , pages , lu (boolean)
Ajoute les méthodes :
marquerCommeLu() : met lu à true
getTempsLecture() : estime le temps de lecture (2 minutes par page)
getStatut() : retourne “Lu” ou “À lire”
Crée 3 livres différents
Affiche la liste des livres dans un tableau HTML
Affiche le temps total de lecture pour les livres non lus
Résultat attendu : Un tableau avec les livres et le temps de lecture restant. -->

<?php

class Livre
{
  public string $titre;
  public string $auteur;
  public int $pages;
  public bool $lu;


  public function __construct(string $titre, string $auteur, int $pages, bool $lu = false)
  {

    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->pages = $pages;
    $this->lu = $lu;

  }



  public function marquerCommeLu(): void
  {
    $this->lu = true;
  }



  public function getTempsLecture(): int
  {
    return $this->pages * 2;
  }

  public function getStatut(): string
  {
    return $this->lu ? "Lu" : "À lire";
  }


}
//créer trois livres 
$livres = [
  new Livre("thomas le chat", "thomas bgdelastreet", 100, false),
  new Livre("manger vert", "cuisto green", 200, true),
  new Livre("poulain la dot à léa", "lea horse", 100, false),
];

// Affiche le temps total de lecture pour les livres non lus

$tempsTotalLecture = 0;
foreach ($livres as $livre) {
  if ($livre->getStatut() === "À lire") { //si statut du livre à lire alors faire appel à la fonction gettempsdelecture
    $tempsTotalLecture = $tempsTotalLecture + $livre->getTempsLecture(); //cette fonction multiplie le nombre de page par 2 minutes temps de lecture d'une seule page
  }

}


//tableau :
echo "<h1>Ma bibliothèque</h1>";

echo "<table border='1' cellpadding='5' cellspacing='0'>";

echo "<tr>";
echo "<th>Titre</th>";
echo "<th>Auteur</th>";
echo "<th>Pages</th>";
echo "<th>Statut</th>";
echo "<th>Temps lecture (sec)</th>";
echo "</tr>";

foreach ($livres as $livre) {

  echo "<tr>";

  echo "<td>" . htmlspecialchars($livre->titre) . "</td>";
  echo "<td>" . htmlspecialchars($livre->auteur) . "</td>";
  echo "<td>" . $livre->pages . "</td>";
  echo "<td>" . $livre->getStatut() . "</td>";
  echo "<td>" . $livre->getTempsLecture() . "</td>";

  echo "</tr>";
}

echo "</table>";

echo "<p><strong>Temps total de lecture : " . $tempsTotalLecture . " minutes </strong></p>";