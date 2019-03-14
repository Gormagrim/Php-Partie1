<?php // Indique que nous "travaillons" en php. ICI PHP DE TRAITEMENT
$name = 'Seb'; // Initialisation de la variable $name. Toutes les variables doivent avoir un $ devant.
// On peut initialiser une variable sans valeur, ex: $name;
// simple côtes uniquement autour d'un texte. Pas sur les chiffres ou les booléens.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1 Partie 1 php</title>
 </head>
 <body>
   <p>Bonjour <?php echo $name; ?></p> <!-- ICI PHP D'AFFICHAGE --> <!-- les " " permettent de rechercher si il y a une variable. -->
   <p>Bonjour <?= $name; ?></p> <!-- Raccourci qui ne fonctionne que si il n'y a qu'un seul echo. -->
   <!-- echo est une fonction qui ne prends pas de parenthéses. -->
   <!-- On met un ; aprés chaque déclaration de variable, ex: echo $firstname; echo $lastname; -->
 </body>
</html>
