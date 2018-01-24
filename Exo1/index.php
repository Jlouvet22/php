<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo1</title>
</head>
<body>
  <!-- Écrire un programme PHP qui affiche tous les nombres impairs entre 0 et 1000, par ordre croissant : « 1 3 5 7 ... 995 997 999 ».-->
  <?php
  $n = 1;
  $resultat = 1000;
  while ($n <= $resultat) {
    echo $n."<br/>";
    $n = $n+2;
  }
  ?>
</body>
</html>
