<?php
// On peut stocker le résultat d'une opération dans une variable, si le résultat est un int, la variable deviendra un int.
  $AdditionResult = 3 + 4;
  $MultiplicationResult = 5 * 20;
  $DivisionResult = 45 / 5;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 8 Partie 1 php</title>
 </head>
 <body>
   <!-- Créer 3 variables.
        Dans la première mettre le résultat de l'opération 3 + 4.
        Dans la deuxième mettre le résultat de l'opération 5 * 20.
        Dans la troisième mettre le résultat de l'opération 45 / 5.
        Afficher le contenu des variables. -->
   <p>Résultat de l'addition 3 + 4 = <?= $AdditionResult; ?></p>
   <p>Résultat de la multiplication 5 * 20 = <?= $MultiplicationResult; ?></p>
   <p>Résultat de la division 45 / 5 = <?= $DivisionResult; ?></p>
</body>
</html>
