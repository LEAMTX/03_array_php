<!-- Énoncé : Crée un formulaire de calcul de prix avec réduction.
Indications :
Crée un fichier public/prix.php
Définis un prix de base ( $prixBase = 100 )
Définis une quantité ( $quantite = 5 )
Définis un code promo ( $codePromo = "SOLDES" )
Calcule le prix total ( $prixBase * $quantite )
Applique une réduction selon le code promo :
“SOLDES” : -20%
“ETE” : -15%
“NOUVEAU” : -10%
Autre : pas de réduction
Applique une réduction supplémentaire de 5% si la quantité >= 10
Affiche le détail du calcul
Résultat attendu : Une page montrant le calcul du prix avec les réductions appliquées. -->

<?php
$prixBase = 100;
$quantite = 5;
$codePromo = "SOLDES";
$prixTotal = $prixBase * $quantite;
$reductionpromo = 0;

if ($codePromo === "SOLDES") {
  $reductionpromo = 20;

} elseif ($codePromo === "ETE") {
  $reductionpromo = 15;

} elseif ($codePromo === "NOUVEAU") {
  $reductionpromo = 10;
} else {
  $reductionpromo = 0;
}

//calcul de la reduction sur le prix total selon le code promo
if ($reductionpromo > 0) {
  $montantPromo = $prixTotal * ($reductionpromo / 100);
  $prixTotal = $prixTotal - $montantPromo;

  echo " <p> la reduction est de  - {$montantPromo} euros , grâce au code promo : { $codePromo } </p>";

} else {
  echo " <p> pas de réduction </p>";

}

//reduction supplementaire si quatité superieure à 10

if ($quantite >= 10) {
  $montantPromo = $prixTotal * 0.05;
  $prixTotal = $prixTotal - $montantPromo;
  echo " <p> la reduction quantité est de - {$montantPromo} euros; </p>";
} else {
  echo " <p> pas de montant quantité </p>";
}

echo " <p> <strong>Total final : {$prixTotal} €</strong> </p>";


