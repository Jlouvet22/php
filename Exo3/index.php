<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo3</title>
</head>
<body>
  <!-- Écrire un programme qui calcule la factorielle de 10.
  Factorielle de 10 : 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 -->

  <?php
  $nombre = 1;
  $resultat = 1;

  while ($nombre <= 10) {
    $resultat = $resultat * $nombre;
    $nombre = $nombre + 1;
  }
  echo $resultat;
  ?>
</body>
</html>
