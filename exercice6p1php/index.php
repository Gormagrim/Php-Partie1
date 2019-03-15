<?php $name = 'Seb'; ?> <!-- Il est préfarable de déclarer une variable unique sur une ligne. -->
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 6 Partie 1 php</title>
 </head>
 <body>
   <!-- Créer une variable name et l'initialiser avec la valeur de votre choix.
Afficher : "Bonjour" + name + ", comment vas tu ?". -->
<!-- Mettre le php dans le html permet d'accélérer le temps de chargement. -->
   <p>Bonjour <?= $name; ?>, comment vas-tu ?</p>
</body>
</html>
