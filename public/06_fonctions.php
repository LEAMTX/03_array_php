<!-- //Énoncé : Crée une bibliothèque de fonctions utilitaires.
Indications :
Crée un fichier public/utilitaires.php
Crée les fonctions suivantes :
estPalindrome($texte) : retourne true si le texte est un palindrome (ex: “kayak”)
compterMots($texte) : retourne le nombre de mots dans un texte
genererMotDePasse($longueur = 8) : génère un mot de passe aléatoire
formaterPrix($prix, $devise = "€") : formate un prix avec 2 décimales et la devise
Teste chaque fonction avec plusieurs valeurs
Affiche les résultats dans un tableau HTML
Résultat attendu : Un tableau avec les tests de chaque fonction. -->

<?php
function estPalindrome(string $texte): bool
{
  $texte = strtolower($texte);
  $longueur = strlen($texte);

  for ($i = 0; $i < floor($longueur / 2); $i++) {
    if ($texte[$i] !== $texte[$longueur - 1 - $i]) { //longueur -1 car index 0 départ, et -I pour léffet mirroir comparer 1 er index et dernier ect
      return false;
    }
  }

  return true;
}

function compterMots(string $texte): int
{
  $texte = trim($texte);

  if ($texte === '') {
    return 0;
  }

  $count = 0;
  $dansUnMot = false;
  $longueur = strlen($texte);

  for ($i = 0; $i < $longueur; $i++) {
    $car = $texte[$i];

    $estSeparateur = ($car === ' ' || $car === "\t" || $car === "\n" || $car === "\r"); //SI UN ESPACE, UN RETOUR À LA LIGNE, UNE TABULATION OU UN RETOUR DE CHARIOT EST SEPARATEUR = FALSE

    if ($estSeparateur) { // si est separateur est true 
      // on sort d'un mot
      $dansUnMot = false; // aucun separateur dans un mot
    } else {
      // on entre dans un mot seulement si on n'y était pas déjà
      if ($dansUnMot === false) {
        $count++;
        $dansUnMot = true;
      }
    }
  }

  return $count;
}

function genererMotDePasse(int $longueur = 8): string
{
  $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  $motDePasse = "";

  $max = strlen($caracteres) - 1;

  for ($i = 0; $i < $longueur; $i++) {
    $indexAleatoire = random_int(0, $max);
    $motDePasse .= $caracteres[$indexAleatoire];
  }

  return $motDePasse;
}
?>

<?php
function formaterPrix(float $prix, string $devise = "€"): string
{
  $prixFormate = number_format($prix, 2, ',', ' ');
  return $prixFormate . " " . $devise;
}
echo formaterPrix(1234.5);
// 1 234,50 €

echo formaterPrix(99.9, "$");
// 99,90 $
?>
<?php
$tests = [
  [
    "fonction" => "estPalindrome",
    "entree" => "kayak",
    "sortie" => estPalindrome("kayak") ? "true" : "false",
  ],
  [
    "fonction" => "estPalindrome",
    "entree" => "bonjour",
    "sortie" => estPalindrome("bonjour") ? "true" : "false",
  ],
  [
    "fonction" => "compterMots",
    "entree" => "Bonjour tout le monde",
    "sortie" => compterMots("Bonjour tout le monde"),
  ],
  [
    "fonction" => "compterMots",
    "entree" => "   Un  texte   avec   espaces   ",
    "sortie" => compterMots("   Un  texte   avec   espaces   "),
  ],
  [
    "fonction" => "genererMotDePasse",
    "entree" => "longueur=8",
    "sortie" => genererMotDePasse(8),
  ],
  [
    "fonction" => "genererMotDePasse",
    "entree" => "longueur=12",
    "sortie" => genererMotDePasse(12),
  ],
  [
    "fonction" => "formaterPrix",
    "entree" => "1234.5, €",
    "sortie" => formaterPrix(1234.5),
  ],
  [
    "fonction" => "formaterPrix",
    "entree" => "99.9, $",
    "sortie" => formaterPrix(99.9, "$"),
  ],
];
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Utilitaires - Tests</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
    }

    th {
      text-align: left;
    }

    code {
      white-space: nowrap;
    }
  </style>
</head>

<body>

  <h1>Tests des fonctions utilitaires</h1>

  <table>
    <thead>
      <tr>
        <th>Fonction</th>
        <th>Entrée</th>
        <th>Sortie</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tests as $test): ?>
        <tr>
          <td><code><?= htmlspecialchars($test["fonction"]) ?></code></td>
          <td><?= htmlspecialchars((string) $test["entree"]) ?></td>
          <td><?= htmlspecialchars((string) $test["sortie"]) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>