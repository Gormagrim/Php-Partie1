<?php //Indique que nous "travaillons" en php.
$lastname = 'Seb'; //Eviter les "" en php car cela demande plus de ressources. (recherche de variable dans les "")
$firstname = 'Larrivée';
$age = 18; //variable de type entier.
// php est un language "dit" serveur.
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 Partie 1 php</title>
  </head>
  <body>
    <p><?= $lastname.', '. $firstname.', '. $age ?> ans</p> <!-- permet d'ouvrir une balise php et de lancer un echo. -->
    <p>Mon prénom est <?= $lastname ?>, mon nom est <?= $firstname ?>, et j'ai <?= $age ?> ans.</p>
    <!-- le . remplace le + en php. -->
  </body>
</html>
