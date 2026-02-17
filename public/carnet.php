<?php

// <!-- Énoncé : Crée un carnet d’adresses simple.
// Indications :
// Crée un fichier public/carnet.php
// Crée un tableau $contacts qui contient 3 contacts fait
// Chaque contact est un tableau associatif avec : “nom”, “email”, “telephone” fait
// Affiche la liste des contacts dans un tableau HTML fait
// Compte et affiche le nombre total de contacts fait
// Affiche les informations du premier contact séparément fait
// Résultat attendu : Un tableau HTML avec 3 contacts et le nombre total affiché. -->

$contacts = [

  ["nom" => "Marc", "email" => "marc@gmail.com", "telephone" => "09889378392"],
  ["nom" => "Packpack", "email" => "packdeau@gmail.com", "telephone" => "0908999900000"],
  ["nom" => "Packpouuuck", "email" => "packoutt@gmail.com", "telephone" => "0999999900000"]


];

echo "<h1>Liste des contacts</h1>";
echo "<table border='1'>";
echo "<tr><th>nom</th><th>email</th><th>telephone</th></tr>";
// Parcours du tableau de tableaux
foreach ($contacts as $contact) {
  echo "<tr>";
  echo "<td>" . $contact["nom"] . "</td>";
  echo "<td>" . $contact["email"] . "</td>";
  echo "<td>" . $contact["telephone"] . "</td>";
  echo "</tr>";
}

echo "</table>";

$countcontact = count($contacts);
echo "<p><strong>total contacts :</strong> " . $countcontact .
  "</p>";

echo "<p><strong> premier contact :</strong> " . $contacts[0]["nom"] . "</p>";
echo $contacts[0]["email"] . "</p>";
echo $contacts[0]["telephone"] . "</p>";
"</p>";