<!-- Indications :
Crée un fichier public/devinette.php
Définis un nombre secret entre 1 et 100 ( $nombreSecret = 42; )
Crée un tableau de tentatives ( $tentatives = [25, 50, 40, 45, 42]; )
Parcours les tentatives avec une boucle
Pour chaque tentative, affiche si c’est “Trop petit”, “Trop grand” ou “Trouvé !”
Quand le nombre est trouvé, arrête la boucle avec break
Affiche le nombre de tentatives utilisées
Résultat attendu : L’historique des tentatives avec le résultat de chaque essai. -->
<?php

$nombreSecret = 42;
$tentatives = [25, 50, 40, 45, 42];
$nbtentatives = 0;
$trouve = false;
foreach ($tentatives as $tentative) {
  $nbtentatives++;


  if ($tentative < $nombreSecret) {
    echo "<p>  trop petit  : {$tentative}<p/>";
  } elseif ($tentative > $nombreSecret) {
    echo "<p>  trop grand  : {$tentative}<p/>";
  } else {
    echo "<p>  trouvé  : {$tentative} = { $nombreSecret} <p/>";
    break; //arrete boucle
  }

}
echo "<p>Nombre de tentatives utilisées : {$nbTentatives}</p>";