<?php
  settype($int, 'int'); /*On définie le type de variable pour éviter les pbs de conversion avec les nouvelles versions de php.
  surtout à l'initialisation d'une variable null. php reconnait automatiquement le type de variable en fonction de son contenu
  settype prend en paramètres le nom de la variable et son type entre quotes.*/
  $int = null; //ou $int sans valeur.
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 5 Partie 1 php</title>
 </head>
 <body>
   <!-- Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher. -->
   <p>Valeur par default de la variable : <?= $int ?></p>
   <?php $int = 54; ?>
   <p>Valeur secondaire de la variable : <?= $int ?></p>
</body>
</html>
