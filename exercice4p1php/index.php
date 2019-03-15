<?php
  $string = 'text'; // variable de type string. Elles sont entourées de quotes.
  $bool = true; // variable de type bolean.
  $float = 27.5; // variable de type float. float donne un nombre à virgules flottante.
  $int = 54; // variable de type int. c'est un entier.

 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 4 Partie 1 php</title>
 </head>
 <body>
   <!-- Créer une variable de type string, une variable de type int,
   une variable de type float, une variable de type booléan et les
   initialiser avec une valeur de votre choix. Les afficher. -->
   <p>variable de type string : <?= $string; ?></p>
   <p>variable de type booléen : <?= $bool; ?></p>
   <p>variable de type float : <?= $float; ?></p> <!--  true affiche 1 et false n'affiche rien. -->
   <p>variable de type int : <?= $int; ?></p>


 </body>
</html>
