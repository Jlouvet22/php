<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo5</title>
</head>
<body>
  <!-- Écrire un programme qui affiche la table de multiplication de 13 et ses résultats. -->
  <?php
  $n = 13;
  // $resutlat;
  // while ($s <= 10) {
  //   $resultat=$s * $n;
  //   echo $s." x ". $n.' = '. $resultat .'<br/>';
  //   $s++;
  // }
  for ($i=1; $i <= 10; $i++) {
    echo $i." x ". $n.' = '. $i*$n .'<br/>';
  }
  ?>
</body>
</html>
