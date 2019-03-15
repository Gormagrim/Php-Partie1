<?php
  $lastname = 'Seb';
  $firstname = 'Larrivée';
  $age = 18;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
  <title>Exercice 7 Partie 1 php</title>
 </head>
 <body>
   <!-- Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
        Attention age est de type entier.
        Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans". -->
   <p>Bonjour <?= $lastname; ?> <?= $firstname; ?>, tu as <?= $age; ?> ans.</p>

</body>
</html>
