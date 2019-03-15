<?php
 $km = 1; //On initialise la valeur de la variable
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 Partie 1 php</title>
 </head>
 <body>
<p><?= $km; ?></p> <!-- On appel la variable une première fois Les ; aprés une variable unique n'est pas obligatoire, mais plus rigoureux -->
<?php  $km = 3; ?> <!-- On réinitialise la variable une première fois -->
<p><?= $km; ?></p> <!-- On appel la variable une deuxième fois -->
<?php $km = 125; ?> <!-- On réinitialise la variable une seconde fois fois -->
<p><?= $km; ?></p> <!-- On appel la variable une troisième fois -->
 </body>
</html>
