<?php
$nb = $_POST['nombre'];
$nombre = 1;
$resultat = 1;

while ($nombre <= $nb) {
  $resultat = $resultat * $nombre;
  $nombre++;
}

echo 'Votre résultat est de '. $resultat;
?>
